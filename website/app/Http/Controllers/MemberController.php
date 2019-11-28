<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
//--------------------------------------------------------------------------//
    public function index(){
        $members = \Api::members();
        return view('members_society.index',['members' => $members]);
    }
//--------------------------------------------------------------------------//
    public function show($slug){
        $member = \Api::member($slug);
        return view('members_society.show',['member' => $member]);
    }
}
