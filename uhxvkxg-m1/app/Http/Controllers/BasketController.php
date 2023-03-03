<?php

namespace App\Http\Controllers;

use App\Models\basket;
use Illuminate\Http\Request;


class BasketController extends Controller
{
    public function baskets() {
    $id_user=Auth::user()->id;
    $p=basket::where("user_id",$id_user)->get();
    Auth::user()->id;
    return view('basket',copmact('p'));

}
public function products($id) {
    $test=basket::create([
'user_id'=>Auth::user()->id,
'product_id'=>$id,
'quantity'=>1,
    ]);
    return redirect('/katalog/1');
}
public function deletebasket($id) {
basket::find($id)->delete();
return redirect()->route('delete')->with('товар был удален');

}
}
