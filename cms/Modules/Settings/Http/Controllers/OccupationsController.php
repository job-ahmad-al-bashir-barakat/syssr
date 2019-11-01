<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Yajra\Datatables\Datatables;
use LaravelLocalization;
use Cocur\Slugify\Slugify;
use Modules\Settings\Entities\Occupation;

class OccupationsController extends Controller
{
//----------------------------------------------------------------------//
    public function index(){
        return view('settings::occupations');
    }
//----------------------------------------------------------------------//
    public function store(Request $request){
        $success = true;
        $message = '';
        // if($request['name_ar']!='') {
        //     $occupation = Occupation::all()->where('name_ar', $request['name_ar']);
        //     if ($occupation->isNotEmpty()) {
        //         $success = false;
        //         $message .= "<div><b>" . trans('cms.occupation') . ' ' . trans('main.ar') . '</b>: ' . trans('validation.unique').'</div>';
        //     }
        // }
        // if($request['name_en']!='') {
        //     $occupation = Occupation::all()->where('name_en', $request['name_en']);
        //     if ($occupation->isNotEmpty()) {
        //         $success = false;
        //         $message .= "<div><b>" . trans('cms.occupation') . ' ' . trans('main.en') . '</b>: ' . trans('validation.unique').'</div>';
        //     }
        // }
        if($success){
            $message = trans('cms.saved_successfully');
            $occupation = new Occupation();
            $occupation->setTranslation('name', 'en', $request['name_en']);
            $occupation->setTranslation('name', 'ar', $request['name_ar']);
            $slugify = new Slugify();
            $occupation->code = $slugify->slugify($request['name_en']);
            $occupation->save();
        }
        return response()->json(['success' => $success , 'message' => $message]);
    }
//----------------------------------------------------------------------//
    public function getDatatableOccupations(){
        $occupations = Occupation::orderBy('name','asc')->get();
        return Datatables::of($occupations)
        ->addColumn('name_en',function ($col){
            return $col->getTranslation('name', 'en');
        })->addColumn('name_ar',function ($col){
            return $col->getTranslation('name', 'ar');
        })->make(true);
    }
//----------------------------------------------------------------------//
    public function edit($id){
        $occupation = Occupation::findOrFail($id);
        return response()->json([
            'name_en'       =>  $occupation->getTranslation('name','en'),
            'name_ar'       =>  $occupation->getTranslation('name','ar'),
        ]);
    }
//----------------------------------------------------------------------//
    public function update(Request $request, $id){
        $success = true;
        $message = '';
        // if($request['name_ar']!='') {
        //     $occupation = Occupation::all()->where('name_ar', $request['name_ar']);
        //     if ($occupation->isNotEmpty()) {
        //         $success = false;
        //         $message .= "<div><b>" . trans('cms.occupation') . ' ' . trans('main.ar') . '</b>: ' . trans('validation.unique').'</div>';
        //     }
        // }
        // if($request['name_en']!='') {
        //     $occupation = Occupation::all()->where('name_en', $request['name_en']);
        //     if ($occupation->isNotEmpty()) {
        //         $success = false;
        //         $message .= "<div><b>" . trans('cms.occupation') . ' ' . trans('main.en') . '</b>: ' . trans('validation.unique').'</div>';
        //     }
        // }
        if($success){
            $message = trans('cms.updated_successfully');
            $occupation = Occupation::findOrFail($id);
            $occupation->setTranslation('name', 'en', $request['name_en']);
            $occupation->setTranslation('name', 'ar', $request['name_ar']);
            $slugify = new Slugify();
            $occupation->code = $slugify->slugify($request['name_en']);
            $occupation->save();
        }
        return response()->json(['success' => $success , 'message' => $message]);
    }
//----------------------------------------------------------------------//
    public function destroy(Occupation $occupation){
        //TODO check if used by any thing first
        $occupation->delete();
        return response()->json(['success' => true , 'message' => trans('cms.deleted_successfully')]);
    }
//----------------------------------------------------------------------//
}
