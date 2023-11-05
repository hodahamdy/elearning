<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\EntrySection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
     $firstsection=EntrySection::first();
     $cards=card::get();
        return view('home',compact('firstsection','cards'));


    }

}
