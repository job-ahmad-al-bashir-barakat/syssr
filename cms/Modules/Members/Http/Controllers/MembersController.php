<?php

namespace Modules\Members\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Modules\Members\Entities\Member;
use Modules\Members\Http\Requests\MemberRequest;
use Modules\Members\Http\Requests\MembersRequest;
use Yajra\Datatables\Datatables;
use LaravelLocalization;


class MembersController extends Controller
{
//----------------------------------------------------------------------//
    public function __construct(){
        // $this->middleware(['auth','verified']);
    }
//----------------------------------------------------------------------//
    /**
     * Display a listing of the resource.
     * @return Response
     */
//----------------------------------------------------------------------//
    public function index(){
        $members = Member::all()->toArray();
        $total_members = count($members);
        return view('members::index', compact('total_members'));
    }
//----------------------------------------------------------------------//
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('members::create');
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
        return Member::findOrFail($id);
    }
//----------------------------------------------------------------------//
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('members::edit');
    }
//----------------------------------------------------------------------//
    public function update(Request $request, $id)
    {
        if($request->get('password',''))
            $data = $request->input();
        else
            $data = $request->except('password');

        $filename = \Upload::avatar();

        $member = Member::findOrFail($id);

        $data['avatar'] = $filename;

        $member->update($data);

        return response()->json(['success' => true]);
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
    public function getDatatableMembers(){
        $members = Member::orderBy('created_at','desc')->get();
        return Datatables::of($members)
        ->addColumn('full_name',function ($col){
            return $col->first_name.' '.$col->last_name;
        })->addColumn('verified',function ($col){
            return $col->email_verified_at ? 'Y':'N';
        })->make(true);
    }
//----------------------------------------------------------------------//
}
