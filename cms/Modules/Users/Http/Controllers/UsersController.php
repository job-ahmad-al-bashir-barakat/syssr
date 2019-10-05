<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
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
    public function create(){
        return view('users::create');
    }
//----------------------------------------------------------------------//
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request){
        $request->validate([
            'first_name'            =>  'required',
            'username'              =>  'required|unique:users',
            'email'                 =>  'required|email|unique:users',
            'password'              =>  'required|confirmed|min:6',
        ]);

        $user = new User([
            'first_name'        =>  $request['first_name'],
            'last_name'         =>  $request['last_name'],
            'username'          =>  $request['username'],
            'email'             =>  $request['email'],
            'password'          =>  bcrypt($request['password']),
            'profile_photo'     =>  ''
        ]);
        $user->save();
        $userId = $user->id;

        // $profilePhoto = $request['profile_photo'];

        // $ext = $profilePhoto->extension();
        // $filename = 'profile_photo_'.$userId.'.'.$ext;
        // $profilePhoto->storeAs('uploads/profile_photos/',$filename);
        // $user->profile_photo = 'uploads/profile_photos/'.$filename;
        // $user->save();
        if($request['submit_type']=='add_new')
            $redirect = 'users.create';
        else
            $redirect = 'users.index';

        return redirect(route($redirect))->with('success', trans('cms.saved_successfully'));
    }
//----------------------------------------------------------------------//
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(User $user){
        return view('users::show', compact('user'));
    }
//----------------------------------------------------------------------//
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(User $user){
        return view('users::edit', compact('user'));
    }
//----------------------------------------------------------------------//
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, User $user){
        $request->validate([
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'username'      => [
                'required',
                Rule::unique('users')->ignore($user->id),
            ],
            'email'         => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ]
        ]);

        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->save();
        // $userId = $user->id;

        // if(isset($request['profile_photo'])){
        //     $profilePhoto = $request['profile_photo'];

        //     $ext = $profilePhoto->extension();
        //     $filename = 'profile_photo_'.$userId.'.'.$ext;
        //     $profilePhoto->storeAs('uploads/profile_photos/',$filename);
        //     $user->profile_photo = 'uploads/profile_photos/'.$filename;
        //     $user->save();
        // }

        return redirect('users')->with('success', trans('cms.updated_successfully'));
    }
//----------------------------------------------------------------------//
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(User $user){
        // Storage::delete($user->profile_photo);
        $user->delete();
    }
//----------------------------------------------------------------------//
    public function getDatatableUsers(){
        $users = User::orderBy('created_at','desc')->get();
        return Datatables::of($users)
        ->addColumn('full_name',function ($col){
            return $col->first_name.' '.$col->last_name;
        })->addColumn('verified',function ($col){
            return $col->email_verified_at ? 'Y':'N';
        })->make(true);
    }
//----------------------------------------------------------------------//
    public function changePassword($id){
        $user = User::find($id);
        return view('users::change_password', compact('user'));
    }
//----------------------------------------------------------------------//
    public function changePasswordUpdate(Request $request, User $user){
        // $request->validate([
        //     'old_password'          =>  'required|old_password:' . $user->password,
        //     'password'              =>  'required|confirmed|min:6',
        // ]);
        // dd($request->all());
    }
//----------------------------------------------------------------------//
}
