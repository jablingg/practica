<?php

namespace App\Http\Controllers;

use App\Models\basket;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BasketController;



class BasketController extends Controller
{
    public function baskets() {
    $id_user=Auth::user()->id;
    $p=basket::where("user_id",$id_user)->get();
    Auth::user()->id;
    return view('basket',compact('p'));



}
public function products($id) {
    $test=basket::create([
'user_id'=>Auth::user()->id,
'product_id'=>$id,
'quantity'=>1,
    ]);
    return redirect('/catalog');
}
public function deletebasket($id) {
basket::find($id)->delete();
return redirect()->route('bskt');

}
//public function showes($add=0) {
//$a=DB::table('catalogs')->get();
//return view('catalog',["a"=>$a, "add"=>$add]);

//}
}
