<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
//--------------------------------------------------------------------------//
    public function __construct(){
        // $this->middleware('auth');
    }
//--------------------------------------------------------------------------//
    public function index(){
        return view('home');
    }
//--------------------------------------------------------------------------//
    public function about_society(){
        $about_society = '';
        return view('about_society', compact('about_society'));
    }
//--------------------------------------------------------------------------//
    public function who_we_are(){
        $who_we_are = '';
        return view('who_we_are', compact('who_we_are'));
    }
//--------------------------------------------------------------------------//
    public function society_goals(){
        // $our_goals = \Api::getOurGoals();
        // dd($our_goals);
        $our_goals = '';
        return view('society_goals', compact('our_goals'));
    }
//--------------------------------------------------------------------------//
    public function members_society(){
        return view('members_society');
    }
//--------------------------------------------------------------------------//
    public function join_us(){
        return view('join_us');
    }
//--------------------------------------------------------------------------//
    public function news_society(){
        return view('news_society');
    }
//--------------------------------------------------------------------------//
    public function ads(){
        return view('ads');
    }
//--------------------------------------------------------------------------//
    public function opportunity_job(){
        return view('opportunity_job');
    }
//--------------------------------------------------------------------------//
    public function news_members(){
        return view('news_members');
    }
//--------------------------------------------------------------------------//
    public function projects(){
        return view('projects');
    }
//--------------------------------------------------------------------------//
    public function workshop(){
        return view('workshop');
    }
//--------------------------------------------------------------------------//
    public function contact(){
        return view('contact');
    }
//--------------------------------------------------------------------------//
}
