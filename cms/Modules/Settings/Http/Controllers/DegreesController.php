<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Yajra\Datatables\Datatables;
use LaravelLocalization;
use Cocur\Slugify\Slugify;
use Modules\Settings\Entities\Degree;

class DegreesController extends Controller
{
//----------------------------------------------------------------------//
    public function index(){
        return view('settings::degrees');
    }
//----------------------------------------------------------------------//
public function store(Request $request){
    $success = true;
    $message = '';
    // if($request['name_ar']!='') {
    //     $degree = Degree::all()->where('name_ar', $request['name_ar']);
    //     if ($degree->isNotEmpty()) {
    //         $success = false;
    //         $message .= "<div><b>" . trans('cms.degree') . ' ' . trans('main.ar') . '</b>: ' . trans('validation.unique').'</div>';
    //     }
    // }
    // if($request['name_en']!='') {
    //     $degree = Degree::all()->where('name_en', $request['name_en']);
    //     if ($degree->isNotEmpty()) {
    //         $success = false;
    //         $message .= "<div><b>" . trans('cms.degree') . ' ' . trans('main.en') . '</b>: ' . trans('validation.unique').'</div>';
    //     }
    // }
    if($success){
        $message = trans('cms.saved_successfully');
        $degree = new Degree();
        $degree->setTranslation('name', 'en', $request['name_en']);
        $degree->setTranslation('name', 'ar', $request['name_ar']);
        $slugify = new Slugify();
        $degree->code = $slugify->slugify($request['name_en']);
        $degree->order = $request['order'];
        $degree->save();
    }
    return response()->json(['success' => $success , 'message' => $message]);
}
//----------------------------------------------------------------------//
    public function getDatatableDegrees(){
        $degrees = Degree::orderBy('name','asc')->get();
        return Datatables::of($degrees)
        ->addColumn('name_en',function ($col){
            return $col->getTranslation('name', 'en');
        })->addColumn('name_ar',function ($col){
            return $col->getTranslation('name', 'ar');
        })->make(true);
    }
//----------------------------------------------------------------------//    
    public function edit($id){
        $degree = Degree::findOrFail($id);
        return response()->json([
            'name_en'       =>  $degree->getTranslation('name','en'),
            'name_ar'       =>  $degree->getTranslation('name','ar'),
            'order'         =>  $degree->order
        ]);
    }
//----------------------------------------------------------------------//
    public function update(Request $request, $id){
        $success = true;
        $message = '';
        // if($request['name_ar']!='') {
        //     $degree = Degree::all()->where('name_ar', $request['name_ar']);
        //     if ($degree->isNotEmpty()) {
        //         $success = false;
        //         $message .= "<div><b>" . trans('cms.degree') . ' ' . trans('main.ar') . '</b>: ' . trans('validation.unique').'</div>';
        //     }
        // }
        // if($request['name_en']!='') {
        //     $degree = Degree::all()->where('name_en', $request['name_en']);
        //     if ($degree->isNotEmpty()) {
        //         $success = false;
        //         $message .= "<div><b>" . trans('cms.degree') . ' ' . trans('main.en') . '</b>: ' . trans('validation.unique').'</div>';
        //     }
        // }
        if($success){
            $message = trans('cms.updated_successfully');
            $degree = Degree::findOrFail($id);
            $degree->setTranslation('name', 'en', $request['name_en']);
            $degree->setTranslation('name', 'ar', $request['name_ar']);
            $slugify = new Slugify();
            $degree->code = $slugify->slugify($request['name_en']);
            $degree->order = $request['order'];
            $degree->save();
        }
        return response()->json(['success' => $success , 'message' => $message]);
    }
//----------------------------------------------------------------------//
    public function destroy(Degree $degree){
        //TODO check if used by any thing first
        $degree->delete();
        return response()->json(['success' => true , 'message' => trans('cms.deleted_successfully')]);
    }
//----------------------------------------------------------------------//
}
