<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function welcome($value='')
    {
    	return view('welcome');
    }

     public function testing($value='')
    {
    	return view('testing');
    }
    public function home($value='')
    {
    	return view('home');
    }
    public function about($value='')
    {
    	return view('about');
    }


}
