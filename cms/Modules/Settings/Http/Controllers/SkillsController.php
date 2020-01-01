<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Yajra\Datatables\Datatables;
use LaravelLocalization;
use Cocur\Slugify\Slugify;
use Modules\Settings\Entities\Skill;

class SkillsController extends Controller
{
//----------------------------------------------------------------------//
    public function index(){
        return view('settings::skills');
    }
//----------------------------------------------------------------------//
    public function store(Request $request){
        $success = true;
        $message = '';
        if($request['name_ar']!='') {
            $skill = Skill::where('name->ar', $request['name_ar'])->get();
            if ($skill->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($request['name_en']!='') {
            $skill = Skill::where('name->en', $request['name_en'])->get();
            if ($skill->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($success){
            $message = trans('cms.saved_successfully');
            $skill = new Skill();
            $skill->setTranslation('name', 'en', $request['name_en']);
            $skill->setTranslation('name', 'ar', $request['name_ar']);
            $slugify = new Slugify();
            $skill->code = $slugify->slugify($request['name_en']);
            $skill->save();
        }
        return response()->json(['success' => $success , 'message' => $message]);
    }
//----------------------------------------------------------------------//
    public function getDatatableSkills(){
        $skills = Skill::orderBy('name','asc')->get();
        return Datatables::of($skills)
        ->addColumn('name_en',function ($col){
            return $col->getTranslation('name', 'en');
        })->addColumn('name_ar',function ($col){
            return $col->getTranslation('name', 'ar');
        })->make(true);
    }
//----------------------------------------------------------------------//
    public function edit($id){
        $skill = Skill::findOrFail($id);
        return response()->json([
            'name_en'       =>  $skill->getTranslation('name','en'),
            'name_ar'       =>  $skill->getTranslation('name','ar'),
        ]);
    }
//----------------------------------------------------------------------//
    public function update(Request $request, $id){
        $success = true;
        $message = '';
        if($request['name_ar']!='') {
            $skill = Skill::where('name->ar', $request['name_ar'])->where('id', '!=', $id)->get();
            if ($skill->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($request['name_en']!='') {
            $skill = Skill::where('name->en', $request['name_en'])->where('id', '!=', $id)->get();
            if ($skill->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($success){
            $message = trans('cms.updated_successfully');
            $skill = Skill::findOrFail($id);
            $skill->setTranslation('name', 'en', $request['name_en']);
            $skill->setTranslation('name', 'ar', $request['name_ar']);
            $slugify = new Slugify();
            $skill->code = $slugify->slugify($request['name_en']);
            $skill->save();
        }
        return response()->json(['success' => $success , 'message' => $message]);
    }
//----------------------------------------------------------------------//
    public function destroy(Skill $skill){
        //TODO check if used by any thing first
        $skill->delete();
        return response()->json(['success' => true , 'message' => trans('cms.deleted_successfully')]);
    }
//----------------------------------------------------------------------//
}
