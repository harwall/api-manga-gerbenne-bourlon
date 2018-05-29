<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manga;
use App\Type;

class MangaController extends Controller
{
    public function getAllMangas()
    {
        $mangas = Manga::select('id', 'english_name', 'cover_picture')->get();

        return $mangas;
    }
    public function showManga(Request $request,$mangaId)
    {
        $manga = Manga::with('types','sellers')->where('id',$mangaId)->first();

        if(!$manga){
            abort(404,'manga not found');
        }

        return $manga;
    }

    public function searchMangas(Request $request)
    {
        $query = Manga::select('id', 'english_name', 'cover_picture');

        if($request->has('q')){
            $query = $query->where('english_name','like','%'.$request->q.'%');
        }
        $query = $query->get();
        return $query;
    }
    public function searchMangasByAuthors(Request $request)
    {
        $query = Manga::select('id', 'english_name', 'authors', 'cover_picture');

        if($request->has('q')){
             $query = $query->where('authors','like','%'.$request->q.'%');
        }
        $query = $query->get();
        return $query;
    }











/*    public function searchMangas(Request $request)
    {
        $query = Manga::with('types','resellers');

        if($request->has('q')){
            $query = $query->where('english_name','like','%'.$request->q.'%');
        }
        if($request->has('status')){
            $query = $query->where('status',$request->status);
        }
        if($request->has('types')){

            $types = $request->types;

            $query = $query->whereHas('types',function($query) use($types) {
                $query->whereIn('name',$types);
            });
        }
        if($request->has('price')){


            //$query = $query->resellers()->wherePivot('price','<',0);
        }

        if($request->has('auteur')){
             $query = $query->where('authors','like','%'.$request->auteur.'%');
        }


        $query = $query->get();
        return $query;
    }*/

}
