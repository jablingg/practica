<?php

namespace App\Http\Controllers;

use App\Models\basket;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product as pr;
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
public function store(request $req) {
    $k=$req->file('img');
    $filename=$k->move(public_path('img'),$k->getClientOriginalName());
    pr::create([
        'name'=>$req->input('name'),
        'img'=>'/public/img/'.$k->getClientOriginalName(),
        'category'=>$req->input('category'),
        'contry'=>$req->input('contry'),
        'production_yaer'=>$req->input('production_yaer'),
        'description'=>$req->input('description'),
        'price'=>$req->input('price'),
    ]);
    return view('admin');
   }
        public function addstore() {
        if( Auth::user()->name=="admin"){
            return view('admin');
        }else{
            return redirect()->route('about');
        }

   }
}