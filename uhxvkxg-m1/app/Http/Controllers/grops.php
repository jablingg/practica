<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\groups;
use Illuminate\Support\Facades\DB;

class grops extends Controller
{
    
        public function show() {
            $a =DB::table('tests')
            ->select('id','img','surname','name')
            ->orderby('name', 'desc')
            ->get('id','name');
            $a == "0";
            return view('group', ['a' => $a]);
        }
}
