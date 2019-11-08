<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pages\Entities\OurGoals;

class OurGoalsController extends Controller{
//------------------------------------------------------------------------//
    public function index(){
        $ourGoals = OurGoals::find(1);
        if(empty($ourGoals))
            $description_en = $description_ar = '';
        else{
            $description_en = $ourGoals->getTranslation('description', 'en');
            $description_ar = $ourGoals->getTranslation('description', 'ar');
        }
        return view('pages::our_goals',compact('description_en', 'description_ar'));
    }
//------------------------------------------------------------------------//
    public function store(Request $request){
        $ourGoals = new OurGoals();
        $ourGoals->setTranslation('description', 'en', $request['description_en']);
        $ourGoals->setTranslation('description', 'ar', $request['description_ar']);
        $ourGoals->save();
        
        $message = trans('cms.saved_successfully');
        return redirect(url('pages/our-goals'))->with('message', $message);
    }
//------------------------------------------------------------------------//
    public function getOurGoals(Request $request){
        if(isset($request['lang']))
            $lang = $request['lang'];
        else 
            $lang = 'en';

        $ourGoals = OurGoals::find(1);
        if(empty($ourGoals))
            $description_en = $description_ar = $description = '';
        else{
            $description_en = $ourGoals->getTranslation('description', 'en');
            $description_ar = $ourGoals->getTranslation('description', 'ar');
            $description = $ourGoals->getTranslation('description', $lang);
        }
        return [
            'description_en'        =>  $description_en,
            'description_ar'        =>  $description_ar,
            'description'           =>  $description,
        ];
    }
//------------------------------------------------------------------------//
}
