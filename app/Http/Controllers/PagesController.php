<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Alex & Alicia\'s Page!';
        // return view('pages.index', compact('tittle')); NOT WORKING FOR ME
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $about = 'About this Page!';
        return view('pages.about')->with('about', $about);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Register & Login', 'Posts', 'Upload small images']
        );
        return view('pages.services')->with($data);
    }
}
