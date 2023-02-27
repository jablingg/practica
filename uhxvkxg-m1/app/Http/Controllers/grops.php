<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\groups;
use Illuminate\Support\Facades\DB;

class grops extends Controller
{

        public function producted() {
            $a =DB::table('tests')
            ->select('id','img','price','name','description','category','production_yaer')
            ->orderby('name', 'desc')
            ->get('id','name');
            $a == "0";
            return view('catalog', ['a' => $a]);
        }
        public function slider() {
            $a =DB::table('tests')
            ->select('id','img','name')
            ->orderby('name', 'desc')
            ->limit (5)
            ->get('id','name');
            $a == "0";
            return view('about', ['a' => $a]);
        }
}
