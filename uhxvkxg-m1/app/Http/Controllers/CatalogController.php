<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catalog;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
   // public function producted($id = "id", $sort = "desc", $add=0) {
   //     $a = catalog::orderby($id, $sort) -> get();
     // return view('catalog', ['a' => $a, "add"=>$add]);
   //}

    public function slider($id = "id", $sort = "desc") {
        $a = catalog::orderby($id, $sort) ->limit(5) -> get();
        return view('about', ['a' => $a]);
    }

    public function singleproduct($id){
        $a = catalog::find($id);
        return view('singlesproduct', ['a' => $a]);
    }

}
