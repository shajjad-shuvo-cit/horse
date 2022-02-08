<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }
    public function aboutview()
    {
        $headline = "this is our heading";
        $para = "this is our paragraph with lots of para";
        return view('about',compact('headline','para'));
    }

    public function mediaview()
    {
        $tv_channels = ['btv','gtv','etv','atn','71','ch-i'];
        return view('media',compact('tv_channels'));
    }

    public function contactview()
    {
        return view('contact');
    }










}
