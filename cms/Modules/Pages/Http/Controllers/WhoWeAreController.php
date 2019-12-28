<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pages\Entities\WhoWeAre;

class WhoWeAreController extends Controller{
//------------------------------------------------------------------------//
public function index(){
    $whoWeAre = WhoWeAre::find(1);
    if(empty($whoWeAre))
        $description_en = $description_ar = '';
    else{
        $description_en = $whoWeAre->getTranslation('description', 'en');
        $description_ar = $whoWeAre->getTranslation('description', 'ar');
    }
    return view('pages::who_we_are',compact('description_en', 'description_ar'));
}
//------------------------------------------------------------------------//
public function store(Request $request){
    $whoWeAre = WhoWeAre::find(1);
    if(empty($whoWeAre))
        $whoWeAre = new WhoWeAre();
        
    $whoWeAre->setTranslation('description', 'en', $request['description_en']);
    $whoWeAre->setTranslation('description', 'ar', $request['description_ar']);
    $whoWeAre->save();
    
    $message = trans('cms.saved_successfully');
    return redirect()->back()->with('message', $message);
}
//------------------------------------------------------------------------//
public function getWhoWeAre(Request $request){
    if(isset($request['lang']))
        $lang = $request['lang'];
    else 
        $lang = 'en';

    $whoWeAre = WhoWeAre::find(1);
    if(empty($whoWeAre))
        $description_en = $description_ar = $description = '';
    else{
        $description_en = $whoWeAre->getTranslation('description', 'en');
        $description_ar = $whoWeAre->getTranslation('description', 'ar');
        $description = $whoWeAre->getTranslation('description', $lang);
    }
    return [
        'description_en'        =>  $description_en,
        'description_ar'        =>  $description_ar,
        'description'           =>  $description,
    ];
}
//------------------------------------------------------------------------//
}
