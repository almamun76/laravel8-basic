<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller{
    public function displayContactPage(){
        return view('contact');
    }

    public function displayPortfolioPage(){
        return view('portfolio');
    }

    public function displayOrderPage(){
        return view('order');
    }
}
