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
        return Member::with(['research_interests', 'skills', 'degrees', 'associations'])->where('id',$id)->first();
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
            if(isset($request['required_'.$memberFields[$i]]))
                $memberField->required = 'T';
            else
                $memberField->required = 'F';

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
    public function store(Request $request)
    {
        $data = $request->input();
        $lang = request('lang');

        $data['password'] = bcrypt($data['password']);
        $data['api_token'] = \Str::random(60);
        $data['mobile'] = $data['mobile_full'];
        $data['country_id'] = $data['country'];
        $data['city_id'] = $data['city'];
        $data['occupation_id'] = $data['current_occupation'];
        $data['location'] = $data['location_address'] ?? $data['location_country_city'];
        $data['avatar'] = \Upload::avatar();
        $data['resume_file'] = \Upload::file('resume_file', null, 'resume');
        $data['type'] = 'M';
        $data['status'] = 'I';

        $member = Member::create($data);

        if($data['research_interests'])
            $member->research_interests()->sync(explode(',',$data['research_interests']));
        if($data['skills'])
            $member->skills()->sync(explode(',',$data['skills']));
        if($data['degrees'])
            $member->degrees()->sync(explode(',',$data['degrees']));
        if($data['associations'])
            $member->associations()->sync(explode(',',$data['associations']));

        return response()->json(['success' => true, 'intended' => "/$lang/about-society/join-us"]);
    }
//----------------------------------------------------------------------//
    public function update(Request $request, $id){

        if($request->get('password','')) {
            $data = $request->input();
            $data['password'] = bcrypt($data['password']);
        } else {
            $data = $request->except('password');
        }

        $data['mobile'] = $data['mobile_full'];
        $data['country_id'] = $data['country'];
        $data['city_id'] = $data['city'];
        $data['occupation_id'] = $data['current_occupation'];
        $data['location'] = $data['location_address'] ?? $data['location_country_city'];

        $member = Member::findOrFail($id);
        $data['resume_file'] = \Upload::file('resume_file', $member->resume_file, 'resume');
        $data['avatar'] = \Upload::avatar($member->avatar);
        $member->update($data);

        if($data['research_interests'])
            $member->research_interests()->sync(explode(',',$data['research_interests']));
        if($data['skills'])
            $member->skills()->sync(explode(',',$data['skills']));
        if($data['degrees'])
            $member->degrees()->sync(explode(',',$data['degrees']));
        if($data['associations'])
            $member->associations()->sync(explode(',',$data['associations']));

        return response()->json(['success' => true, 'resume_file' => $member->resume_file_url]);
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
