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
        $researchInterest = new ResearchInterest();
        $researchInterest->setTranslation('name', 'en', $request['name_en']);
        $researchInterest->setTranslation('name', 'ar', $request['name_ar']);
        $slugify = new Slugify();
        $researchInterest->code = $slugify->slugify($request['name_en']);
        $researchInterest->save();
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
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('settings::edit');
    }
//----------------------------------------------------------------------//
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
