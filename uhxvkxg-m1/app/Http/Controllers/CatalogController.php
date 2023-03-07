<?php

namespace App\Http\Controllers;

use App\Models\categoree;
use App\Models\catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function producted($id = "id", $sort = "desc", $add=0) {
        $a = catalog::orderby($id, $sort) -> get();
        $s=categoree::all();
      return view('catalog', ['a' => $a, 's'=>$s,  "add"=>$add]);
   }

    public function slider($id = "id", $sort = "desc") {
        $a = catalog::orderby($id, $sort) ->limit(5) -> get();
        return view('about', ['a' => $a]);
    }

    public function singleproduct($id){
        $a = catalog::find($id);
        return view('singlesproduct', ['a' => $a]);
    }
    public function sorting($id){
        $a=catalog::where('category', $id)->get();
        $s=categoree::all();
        return view('catalog',['a'=>$a,'s'=>$s]);
    }
}
