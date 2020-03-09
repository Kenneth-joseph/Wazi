<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
# schedule page
public function available(){
    return view('pages.availability');
}
#craete page
public function create_content(){
    return view('pages.createc');

}

#craete page
public function imgpic(){
    return view('pages.image');
}
#craete page
public function mytext(){
    return view('pages.text');
}
public function myvedio(){
    return view('pages.vedio');
}

# home page
public function index(){
    $title = "Here Am home";
    return view('pages.home')->with('title',$title);
}

}
