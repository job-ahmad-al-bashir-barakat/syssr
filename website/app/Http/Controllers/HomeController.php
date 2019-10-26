<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about_society()
    {
        return view('about_society');
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function view_society()
    {
        return view('view_society');
    }

    public function members_society()
    {
        return view('members_society');
    }

    public function join_us()
    {
        return view('join_us');
    }

    public function news_society()
    {
        return view('news_society');
    }

    public function ads()
    {
        return view('ads');
    }

    public function opportunity_job()
    {
        return view('opportunity_job');
    }

    public function news_members()
    {
        return view('news_members');
    }

    public function projects()
    {
        return view('projects');
    }

    public function workshop()
    {
        return view('workshop');
    }

    public function contact()
    {
        return view('contact');
    }
}
