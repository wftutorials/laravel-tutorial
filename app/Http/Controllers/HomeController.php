<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['homePage']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function homePage()
    {
        $title = "Laravel Shop";
        $list = Product::all()
            ->sortByDesc("created_at")
            ->take(5);
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
