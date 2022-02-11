<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysqli;

use App\Models\Channel;
use Carbon\Carbon;

class FrontendController extends Controller
{
    // to view frontpage
    public function index()
    {
        return view('welcome');
    }

    //to view about page
    public function aboutview()
    {
        $headline = "this is our heading";
        $para = "this is our paragraph with lots of para";
        return view('about',compact('headline','para'));
    }

    //to view media page
    public function mediaview()
    {
        //get all channels from database
        $tv_channels =  Channel::all();
        return view('media',compact('tv_channels'));
    }

    public function mediaadd()
    {
        return view('media_add');
    }


    public function mediasave(Request $request)
    {
      //to prevent empty field / validation
      $request->validate([
          'channel_name' => 'required|unique:channels,channel_name',
      ]);

      Channel::insert([
          'channel_name' => $request->channel_name,
          'created_at' => Carbon::now(),
      ]);

      //to back in insert form page with session
      return back()->with('insDone','insert successfully !');

    }

    public function contactview()
    {
        return view('contact');
    }










}
