<?php

namespace Modules\Members\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Modules\Members\Entities\Member;
use Modules\Members\Entities\MemberField;
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
    public function index(){
        $members = Member::all()->toArray();
        $total_members = count($members);
        return view('members::index', compact('total_members'));
    }
//----------------------------------------------------------------------//
    public function create(){
        return view('members::create');
    }
//----------------------------------------------------------------------//
    public function show($id){
        return Member::findOrFail($id);
    }
//----------------------------------------------------------------------//
    public function settings(){
        $memberFields = MemberField::all();
        return view('members::settings',compact('memberFields'));
    }
//----------------------------------------------------------------------//
    public function getMemberFields(Request $request){
        $memberFields = MemberField::all();
        return $memberFields;
    }
//----------------------------------------------------------------------//
    public function saveSettings(Request $request){
        $memberFields = ['first_name', 'last_name', 'personal_email', 'society_email', 'personal_website', 'mobile_phone', 'social_links', 'location', 'research_interests',
                        'skills', 'degrees', 'associations', 'current_occupation', 'member_bio', 'publications', 'resume'];
        for ($i=0; $i < count($memberFields); $i++) { 
            $memberField = MemberField::where('field_code', '=', $memberFields[$i])->firstOrFail();
            $memberField->field_visibility = $request[$memberFields[$i]];
            if(isset($request['over_ride_'.$memberFields[$i]]))
                $memberField->over_ride = 'T';
            else
                $memberField->over_ride = 'F';

            $memberField->save();
        }
        $message = trans('cms.saved_successfully');
        return redirect(url('members/settings'))->with('message', $message);
    }
//----------------------------------------------------------------------//
    public function update(Request $request, $id){
        if($request->get('password',''))
            $data = $request->input();
        else
            $data = $request->except('password');

        $filename = \Upload::avatar();

        if($data['avatar'])
            $data['avatar'] = $filename;
        else
            unset($data['avatar']);

        $member = Member::findOrFail($id);

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
