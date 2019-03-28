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


 	/*Black Jack*/
 	    public function blackjack()
 	{   
 		return view('pages.casino.blackjack');
 	}

     

 	/*Baccarat*/
 	    public function baccarat()
 	{
        return view('pages.casino.baccarat');
 	}


 	/*Baccat Super 6*/
 	 	public function super6()
 	{
        return view('pages.casino.super6');
 	}

 	/*Texas Hold 'em*/
 	 	    public function texasholdem()
 	{
        return view('pages.casino.texasholdem');
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
