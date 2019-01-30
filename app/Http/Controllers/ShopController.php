<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Reviews;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except'=>[]]);
    }

    public function create()
    {
        $title = "Create";
        return view('shop.create')->with('title',$title)
            ->with('success',"asdfasdf");
    }

    public function product( $id="" )
    {
        $model = Product::find($id);
        $reviews = Reviews::where("product_id", $id)
            ->orderBy('created_at', 'desc')
            ->get();
        $title = $model->title;
        return view('shop.product',[
            'id'=>$id,
            'title' => $title,
            'product' => $model,
            'reviews' => $reviews
        ]);
    }

    public function save(Request $request)
    {
        $product = new Product();
        $this->validate($request,[
            "name" => 'required'
        ]);
        $product->setFormData($request);
        $product->user_id = auth()->user()->id;
        $results = $product->save();
        return redirect('/shop/create')
            ->with('success','Post Created');
    }

    public function edit( $id="")
    {
        $model = Product::find($id);
        $title = $model->title;
        return view('shop.edit')
            ->with('product',$model)
            ->with('title', $title);
    }

    public function update(Request $request, $id="")
    {
        $product= Product::find($id);
        $product->setFormData($request);
        $product->save();
    }

    public function remove(Request $request)
    {

        if($request->isMethod("post")) {
            $product = Product::find($request->input("id"));
            $product->delete();
            return redirect('/');
        }
    }
}
