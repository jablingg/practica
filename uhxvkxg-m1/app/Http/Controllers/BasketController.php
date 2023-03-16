<?php

namespace App\Http\Controllers;

use App\Models\basket;
use App\Models\catalog;
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

public function products(request $req ,$id) {
    $p=basket::where('user_id', '=',Auth::user()->id )
    ->where('product_id', '=' , $id )
    ->count();

    if ($p==0){
        echo'товара нету';
        basket::create([
            'user_id'=>Auth::user()->id,
            'product_id'=>$id,
            'quantity'=>1,
                ]);
    }
else{
    echo'товар есть';
    $p=basket::where('user_id', '=',Auth::user()->id )
    ->where('product_id', '=' , $id )
    ->first();
    $p->quantity++;
    $g=basket::find($p->id);
    $p->save();
}



    return redirect('/basket');
}
public function update(Request $request, $id)
    {
        $cart_item = basket::where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->firstOrFail();

        if ($request->input('quantity') > 0) {
            $cart_item->quantity = $request->input('quantity');
            $cart_item->save();
        } else {
            $cart_item->delete();
        }

        return redirect('/basket');
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
   public function deleteitem($id) {
    catalog::find($id)->delete();
    return redirect()->route('admindel');

    }
}
