<?php

namespace App\Http\Controllers;

use App\Models\Bascet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BascetController;

class BascetController extends Controller
{
    public function bascets(){
        $id_user=Auth::user()->id;
        $p=Bascet::where("user_id",$id_user)->get();
        Auth::user()->id;
        return view("bascet",compact('p'));
    }

    public function products($id){
        $test=Bascet::create([
            'user_id'=> Auth::user()->id,
            'product_id'=>$id,
            'quantity'=>1,
        ]);
        return redirect('/catalog');
    }
    public function deletebascet($id){
        Bascet::find($id)->delete();
        return redirect()->route('bascet')->with('Товар был удален');
    }
}
