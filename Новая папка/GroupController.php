<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\GroupController;

class GroupController extends Controller
{
    public function GroupUs($add=0){
         $a=DB::table('catalogs')->get();
         return view('catalog',["a"=>$a, "add"=>$add]);
    }
}
