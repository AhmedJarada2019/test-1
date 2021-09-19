<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('userPages.home');
    }
    public function   news_detalse(){
       return view('userPages.news_detalse');
    }
    public function contact_us(){
        return view('userPages.contact_us');
    }
}
