<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    //

    public function create()
    {
        $title = "Create";
        return view('shop.create')->with('title',$title)
            ->with('success',"asdfasdf");
    }

    public function product( $id="" )
    {
        $model = Product::find($id);
        $title = $model->title;
        return view('shop.product',[
            'id'=>$id,
            'title' => $title,
            'product' => $model,
        ]);
    }

    public function save(Request $request)
    {
        $product = new Product();
        $this->validate($request,[
            "name" => 'required'
        ]);
        $product->setFormData($request);
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

        if ($request->isMethod('post')) {
            $product = Product::find($request->input("id"));
            $product->delete();
            echo "Wroking";
        }else{
            echo "error";
        }
    }
}
