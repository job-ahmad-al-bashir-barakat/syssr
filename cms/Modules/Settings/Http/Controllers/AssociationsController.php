<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Yajra\Datatables\Datatables;
use LaravelLocalization;
use Cocur\Slugify\Slugify;
use Modules\Settings\Entities\Association;

class AssociationsController extends Controller
{
 //----------------------------------------------------------------------//
    public function index(){
        return view('settings::associations');
    }
//----------------------------------------------------------------------//
    public function store(Request $request){
        $success = true;
        $message = '';
        if($request['name_ar']!='') {
            $association = Association::where('name->ar', $request['name_ar'])->get();
            if ($association->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($request['name_en']!='') {
            $association = Association::where('name->en', $request['name_en'])->get();
            if ($association->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($success){
            $message = trans('cms.saved_successfully');
            $association = new Association();
            $association->setTranslation('name', 'en', $request['name_en']);
            $association->setTranslation('name', 'ar', $request['name_ar']);
            $slugify = new Slugify();
            $association->code = $slugify->slugify($request['name_en']);
            $association->save();
        }
        return response()->json(['success' => $success , 'message' => $message]);
    }
//----------------------------------------------------------------------//
    public function getDatatableAssociations(){
        $associations = Association::orderBy('name','asc')->get();
        return Datatables::of($associations)
        ->addColumn('name_en',function ($col){
            return $col->getTranslation('name', 'en');
        })->addColumn('name_ar',function ($col){
            return $col->getTranslation('name', 'ar');
        })->make(true);
    }
//----------------------------------------------------------------------//
    public function edit($id){
        $association = Association::findOrFail($id);
        return response()->json([
            'name_en'       =>  $association->getTranslation('name','en'),
            'name_ar'       =>  $association->getTranslation('name','ar'),
        ]);
    }
//----------------------------------------------------------------------//
    public function update(Request $request, $id){
        $success = true;
        $message = '';
        if($request['name_ar']!='') {
            $association = Association::where('name->ar', $request['name_ar'])->where('id', '!=', $id)->get();
            if ($association->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.ar') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($request['name_en']!='') {
            $association = Association::where('name->en', $request['name_en'])->where('id', '!=', $id)->get();
            if ($association->isNotEmpty()) {
                $success = false;
                $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.unique').'</div>';
            }
        }else{
            $success = false;
            $message .= "<div><b>" . trans('cms.name') . ' ' . trans('cms.en') . '</b>: ' . trans('cms.required').'</div>';
        }
        if($success){
            $message = trans('cms.updated_successfully');
            $association = Association::findOrFail($id);
            $association->setTranslation('name', 'en', $request['name_en']);
            $association->setTranslation('name', 'ar', $request['name_ar']);
            $slugify = new Slugify();
            $association->code = $slugify->slugify($request['name_en']);
            $association->save();
        }
        return response()->json(['success' => $success , 'message' => $message]);
    }
//----------------------------------------------------------------------//
    public function destroy(Association $association){
        //TODO check if used by any thing first
        $association->delete();
        return response()->json(['success' => true , 'message' => trans('cms.deleted_successfully')]);
    }
//----------------------------------------------------------------------//
}
