<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function homePage()
    {
        $title = "Larvel Shop";
        return view('home.index')->with("title", $title);
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
