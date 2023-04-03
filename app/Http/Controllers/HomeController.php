<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home Page - Online Store';
        return view('home.index')
            ->with('viewData', $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData['title'] = 'About Page - Online Store';
        $viewData['description'] = 'This is a description of the about page';
        $viewData['subtitle'] = 'About Page Subtitle';
        $viewData['author'] = "Developed by: Jamal Makame";
        return view('home.about')
            ->with('viewData', $viewData);
    }
}
