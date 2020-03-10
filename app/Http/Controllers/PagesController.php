<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
public function imgpic(Request $request){
    $name = $request['imageName'];
        $description = $request['description'];
        $image = $request['image'];
        $urrl = '';
        if ($image) {
            $image = $request->image->store('public/imageCont');
            print($request->image->store('public/imageCont'));
       
            $urrl = Storage::url($image);
          
        }
     







    return view('pages.image');
}
#craete page
public function mytext(Request $request){
 
    $description = $request['description'];
    $text = $request['text'];
    $urrl = '';
    if ($text) {
        $text = $request->text->store('public/textCont');
        print($request->text->store('public/textCont'));
   
        $urrl = Storage::url($text);
      
    }
 
    return view('pages.text');
}
public function myvedio(Request $request){
        // $name = $request['videoName'];
        // $description = $request['description'];
        // $video = $request['video'];
        // $urrl = '';
        // if ($video) {
        //     $video = $request->video->store('public/videoCont');
        //     print($request->video->store('public/videoCont'));
       
        //     $urrl = Storage::url($video);
          
        // }

    return view('pages.video');
}
public function myaudio(Request $request){
    // $name = $request['audioName'];
    // $description = $request['description'];
    // $audio = $request['audio'];
    // $urrl = '';
    // if ($audio) {
    //     $video = $request->audio->store('public/imageCont');
    //     print($request->audio->store('public/imageCont'));
   
    //     $urrl = Storage::url($audio);
      
    // }

    return view('pages.audio');
}

# home page
public function index(){
    $title = "Here Am home";
    return view('pages.home')->with('title',$title);
}

}
