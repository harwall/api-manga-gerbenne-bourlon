<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reseller;
class ResellerController extends Controller
{
    public function getAllResellers()
    {
/*        $resellers = Reseller::with('mangas')->get();
        return $resellers;
*/
        $resellers = Reseller::select('id', 'name')->get();
        return $resellers;
    }
    public function getAllMangas(Request $request,$resellerId)
    {
        $reseller = Reseller::with('mangas')->find($resellerId);
        return $reseller;
    }
    public function showInformations(Request $request,$resellerId)
    {
        $reseller = Reseller::find($resellerId);
        return $reseller;
    }

/*    public function searchResellers(Request $request)
    {
        $query = Reseller::with('price');

        if($request->has('q')){
            $query = $query->where('name','like','%'.$request->q.'%');
        }

        $query = $query->get();
        return $query;
    }*/


}
