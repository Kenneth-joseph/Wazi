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
# home page
public function index(){
    $title = "Here Am home";
    return view('pages.home')->with('title',$title);
}

}
