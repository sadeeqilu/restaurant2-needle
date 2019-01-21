<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainPageController extends Controller
{
    public function showMainPage()
    {
        return view('restaurants');
    }

    public function showFoods(){
      return view('foods');
    }

    public function showDrinks(){
      return view('drinks');
    }

    public function showAbout(){
      return view('about');
    }


}
