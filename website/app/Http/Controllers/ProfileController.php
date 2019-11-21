<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']); // 'verified'
        $this->lang = \LaravelLocalization::getCurrentLocale();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = \Api::member();
        $country = \Api::country();
        if($user->city_id)
            $city = \Api::city($user->country->code);
        $occupation = \Api::occupation();

        return view('profile', compact('user','country', 'city', 'occupation'));
    }
}
