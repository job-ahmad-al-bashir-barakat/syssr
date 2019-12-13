<?php

namespace Modules\Members\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Modules\Members\Entities\Member;
use Modules\Members\Entities\MemberField;
use Yajra\Datatables\Datatables;


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
    public function show($slug){

        $member = Member::with(['research_interests', 'skills', 'degrees', 'associations']);

        if(is_numeric($slug))
            return $member->where('id',$slug)->first();
        else
            return $member->where('slug',$slug)->first();
    }
//----------------------------------------------------------------------//
    public function settings(){
        $memberFields = MemberField::all();
        return view('members::settings',compact('memberFields'));
    }
//----------------------------------------------------------------------//
    public function getMemberFields(Request $request){
        $memberFields = MemberField::all(['field_code', 'field_visibility', 'required', 'over_ride'])->keyBy('field_code');
        return $memberFields;
    }
//----------------------------------------------------------------------//
    public function saveMemberSettings(Request $request){
        $memberFields = ['username', 'bio', 'avatar', 'first_name', 'last_name', 'email', 'society_email', 'date_of_join', 'birth_date', 'gender', 'mobile', 'personal_website',
                'country', 'city', 'street_location', 'research_interests', 'skills', 'degrees', 'associations', 'current_occupation', 'resume', 'publications', 'social_links'];
        for ($i=0; $i < count($memberFields); $i++) {
            $memberField = MemberField::where('field_code', '=', $memberFields[$i])->firstOrFail();
            $memberField->field_visibility = $request[$memberFields[$i]];
            if($memberFields[$i] != 'username' && $memberFields[$i] != 'email' && $memberFields[$i] != 'society_email' && $memberFields[$i] != 'date_of_join'){
                if(isset($request['required_'.$memberFields[$i]]))
                    $memberField->required = 'T';
                else
                    $memberField->required = 'F';
            }

            if(isset($request['over_ride_'.$memberFields[$i]]))
                $memberField->over_ride = 'T';
            else
                $memberField->over_ride = 'F';

            $memberField->save();
        }
        $message = trans('cms.saved_successfully');
        return response()->json(['message' => $message]);
    }
//----------------------------------------------------------------------//
    private function buildMembersRequiredFields($update=false){
        $memberFields = MemberField::all(['field_code', 'field_visibility', 'required', 'over_ride'])->keyBy('field_code')->toArray();
        $requiredFields = [
            'username'   => ["required", "max:255"],
            'email' => ['required'],
        ];
        if($update){
            array_push($requiredFields['username'], Rule::unique('members')->ignore(\Auth::id()));
            array_push($requiredFields['email'], Rule::unique('members')->ignore(\Auth::id()));
        }else{
            array_push($requiredFields['username'], Rule::unique('members'));
            array_push($requiredFields['email'], Rule::unique('members'));
            $requiredFields['password'] = ['required', 'string', 'min:8', 'confirmed'];
        }

        foreach($memberFields as $key => $memberField){
            if($key!='username' && $key!='email' && $key!='password'){
                if($memberField['required']=='T')
                    $requiredFields[$key] = 'required';
            }
        }
        return $requiredFields;
    }
//----------------------------------------------------------------------//
    public function store(Request $request) {
        \App::setLocale(request('lang'));
        $requiredFields = $this->buildMembersRequiredFields();

        $validator = \Validator::make($request->all(),$requiredFields);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->messages()
            ], 422);
        }

        $data = $request->input();
        $lang = request('lang');

        $data['slug'] = \Slugify::slugify($data['username']);
        $data['password'] = bcrypt($data['password']);
        $data['api_token'] = \Str::random(60);
        $data['mobile'] = $data['mobile_full'];
        $data['country_id'] = isset($data['country']) ? $data['country'] : NULL;
        $data['city_id'] = isset($data['city']) ? $data['city'] : NULL;
        $data['occupation_id'] = isset($data['current_occupation']) ? $data['current_occupation'] : NULL;
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
        \App::setLocale(request('lang'));
        $requiredFields = $this->buildMembersRequiredFields(true);

        $validator = \Validator::make($request->all(),$requiredFields);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->messages()
            ], 422);
        }

        if($request->get('password','')) {
            $data = $request->input();
            $data['password'] = bcrypt($data['password']);
        } else {
            $data = $request->except('password');
        }

        $data['slug'] = \Slugify::slugify($data['username']);
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
    public function destroy($id){
        $member = Member::findOrFail($id);
        $member->status = 'C';
        $member->save();
        return response()->json(['message' => trans('cms.deleted_successfully')]);
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
    public function activate($id) {
        $member = Member::findOrFail($id);
        $member->status = 'A';
        $member->email_verified_at = Carbon::now();
        $member->save();
        return response()->json(['success' => true]);
    }
}
