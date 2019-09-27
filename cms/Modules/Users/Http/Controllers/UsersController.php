<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Yajra\Datatables\Datatables;
use LaravelLocalization;
use Modules\Users\Entities\User;

class UsersController extends Controller
{
//----------------------------------------------------------------------//
    public function __construct(){
        $this->middleware(['auth','verified']);
    }
//----------------------------------------------------------------------//
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(){
        $users = User::all()->toArray();
        $total_users = count($users);
        return view('users::index', compact('total_users'));
    }
//----------------------------------------------------------------------//
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('users::create');
    }
//----------------------------------------------------------------------//
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }
//----------------------------------------------------------------------//
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('users::show');
    }
//----------------------------------------------------------------------//
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('users::edit');
    }
//----------------------------------------------------------------------//
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
//----------------------------------------------------------------------//
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
//----------------------------------------------------------------------//
    public function getDatatableUsers(){
        $users = User::orderBy('created_at','desc')->get();
        return Datatables::of($users)
        ->addColumn('full_name',function ($col){
            return $col->first_name.' '.$col->last_name;
        })->addColumn('verified',function ($col){
            return $col->email_verified_at ? true:false;
        })->make(true);
    }
//----------------------------------------------------------------------//
}
