<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    	public function home()
 	{
        return view('home');
 	}
 	    public function aboutus()
 	{
        return view('pages.aboutus');
 	}
 	    public function poker()
 	{
        return view('pages.casino.poker');
 	}
 	    public function baccarat()
 	{
        return view('pages.casino.baccarat');
 	}
 	 	public function minibaccarat()
 	{
        return view('pages.casino.minibaccarat');
 	}
 	 	public function events()
 	{
        return view('pages.events');
 	}
 	 	public function contact()
 	{
        return view('pages.contact');
 	}


}
