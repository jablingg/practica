<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController;

class BaseController extends Controller
{
    public function products($id = "id", $sort = "desc") {
       $a = Product::orderby($id, $sort) ->get(); $a =="0";
       return view('catalog',['a' => $a]);
        }

    public function slider($id = "id", $sort = "desc") {
        $a = Product::orderby($id,$sort) -> limit(5) ->get();
        return view('aboutus',['a' => $a]);
        }
    public function singlproduct($id) {
        $a = Product::find($id);
        return view('catalogdetailed',['a' => $a]);
    }
}
