<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
class SellerController extends Controller
{
    public function getAllSellers()
    {
/*        $sellers = Reseller::with('mangas')->get();
        return $sellers;
*/
        $sellers = Seller::select('id', 'name')->get();
        return $sellers;
    }
    public function getAllMangas(Request $request,$sellerId)
    {
        $seller = Seller::with('mangas')->find($sellerId);
        return $seller;
    }
    public function showInformations(Request $request,$sellerId)
    {
        $seller = Seller::find($sellerId);
        return $seller;
    }

/*    public function searchSellers(Request $request)
    {
        $query = Seller::with('price');

        if($request->has('q')){
            $query = $query->where('name','like','%'.$request->q.'%');
        }

        $query = $query->get();
        return $query;
    }*/


}