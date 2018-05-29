<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    public function getAllTypes()
    {
        $types = Type::select('id', 'name')->get();
        return $types;
    }
    public function getAllMangas(Request $request,$typeId)
    {
        $type = Type::with('mangas')->find($typeId);       
        return $type;
    }
    public function showInformations(Request $request,$typeId)
    {
        $type = Type::find($typeId);
        return $type;
    }
}
