<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{

    public function homePage()
    {
        $title = "Larvel Shop";
        $list = Product::all();
        return view('home.index',[
            'products' => $list
        ])->with("title", $title);
    }

    public function aboutPage()
    {
        $title = "About Page";
        return view('home.about')->with("title", $title);
    }

    public function servicesPage()
    {
        $title = "Services";
        return view('home.services')->with("title", $title);
    }

    public function contactPage()
    {
        $title = "Contact";
        return view('home.contact')->with("title", $title);
    }
}
