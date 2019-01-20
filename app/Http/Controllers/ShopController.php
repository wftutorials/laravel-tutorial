<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //

    public function create()
    {
        $title = "Create";
        return view('shop.create')->with('title',$title);
    }

    public function product( $id="" )
    {
        $title = "Product Name";
        return view('shop.product',[
            'id'=>$id,
            'title' => $title
        ]);
    }
}
