<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        // return view('pages.index', compact('tittle')); NOT WORKING FOR ME
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $about = 'About Laravel!';
        return view('pages.about')->with('about', $about);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programing', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
