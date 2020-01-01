<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Yajra\Datatables\Datatables;
use LaravelLocalization;
use Cocur\Slugify\Slugify;
use Modules\Settings\Entities\ResearchInterest;

class ResearchInterestsController extends Controller
{
//----------------------------------------------------------------------//
    public function index(){
        return view('settings::research_interests');
    }
//----------------------------------------------------------------------//
    public function store(Request $request){
        $success = true;
        $message = '';
        if($request['name_ar']!='') {
            $researchInterest = ResearchInterest::where('name->ar', $request['name_ar'])->get();
            if ($researchInterest->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($request['name_en']!='') {
            $researchInterest = ResearchInterest::where('name->en', $request['name_en'])->get();
            if ($researchInterest->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($success){
            $message = trans('cms.saved_successfully');
            $researchInterest = new ResearchInterest();
            $researchInterest->setTranslation('name', 'en', $request['name_en']);
            $researchInterest->setTranslation('name', 'ar', $request['name_ar']);
            $slugify = new Slugify();
            $researchInterest->code = $slugify->slugify($request['name_en']);
            $researchInterest->save();
        }
        return response()->json(['success' => $success , 'message' => $message]);
    }
//----------------------------------------------------------------------//
    public function getDatatableResearchInterests(){
        $researchInterests = ResearchInterest::orderBy('name','asc')->get();
        return Datatables::of($researchInterests)
        ->addColumn('name_en',function ($col){
            return $col->getTranslation('name', 'en');
        })->addColumn('name_ar',function ($col){
            return $col->getTranslation('name', 'ar');
        })->make(true);
    }
//----------------------------------------------------------------------//
    public function edit($id){
        $researchInterest = ResearchInterest::findOrFail($id);
        return response()->json([
            'name_en'       =>  $researchInterest->getTranslation('name','en'),
            'name_ar'       =>  $researchInterest->getTranslation('name','ar'),
        ]);
    }
//----------------------------------------------------------------------//
    public function update(Request $request, $id){
        $success = true;
        $message = '';
        if($request['name_ar']!='') {
            $researchInterest = ResearchInterest::where('name->ar', $request['name_ar'])->where('id', '!=', $id)->get();
            if ($researchInterest->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($request['name_en']!='') {
            $researchInterest = ResearchInterest::where('name->en', $request['name_en'])->where('id', '!=', $id)->get();
            if ($researchInterest->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($success){
            $message = trans('cms.updated_successfully');
            $researchInterest = ResearchInterest::findOrFail($id);
            $researchInterest->setTranslation('name', 'en', $request['name_en']);
            $researchInterest->setTranslation('name', 'ar', $request['name_ar']);
            $slugify = new Slugify();
            $researchInterest->code = $slugify->slugify($request['name_en']);
            $researchInterest->save();
        }
        return response()->json(['success' => $success , 'message' => $message]);
    }
//----------------------------------------------------------------------//
    public function destroy(ResearchInterest $researchInterest){
        //TODO check if used by any thing first
        $researchInterest->delete();
        return response()->json(['success' => true , 'message' => trans('cms.deleted_successfully')]);
    }
//----------------------------------------------------------------------//
}
