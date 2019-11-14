<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Cocur\Slugify\Slugify;
use Modules\Settings\Entities\City;
use Modules\Settings\Entities\Country;
use Modules\Settings\Entities\Skill;
use Modules\Settings\Entities\Association;
use Modules\Settings\Entities\Degree;
use Modules\Settings\Entities\ResearchInterest;
use Modules\Settings\Entities\Occupation;

class ApiController extends Controller
{
//----------------------------------------------------------------------//
    public function get_data_settings(Request $request){
        $type = $request['type'];
        $tags = $request['tags'] ?? false;
        $q = $request['q'] ?? '';
        if(isset($request['lang']))
            $lang = $request['lang'];
        else
            $lang = 'en';

        switch($type){
            case 'skills':
                $data = Skill::all()->toArray();
            break;
            case 'associations':
                $data = Association::all()->toArray();
            break;
            case 'degrees':
                $data = Degree::all()->toArray();
            break;
            case 'researchInterests':
                $data = ResearchInterest::where("name->$lang", 'like',"%$q%")->get()->toArray();
            break;
            case 'occupations':
                $data = Occupation::all()->toArray();
            break;
            default:
                $data = null;
            break;
        }
        for ($i=0; $i <count($data) ; $i++) {
            $data[$i]['name_lang'] = $data[$i]['name'][$lang];
        }

        if($tags) {
            foreach ($data as $index => $item) {
                $data[$index] = ['value' => $item['id'], 'text' => $item['name'][$lang]];
            }
            return \response()->json($data);
        }
        return $data;
    }
//----------------------------------------------------------------------//
    public function set_data_settings(Request $request){
        $type = $request['type'];
        switch($type){
            case 'skills':
                $data = $request['data'];
                $success = true;
                $message = '';
                if($success){
                    $message = trans('cms.saved_successfully');
                    $skill = new Skill();
                    $skill->setTranslation('name', 'en', $data['name_en']);
                    $skill->setTranslation('name', 'ar', $data['name_ar']);
                    $slugify = new Slugify();
                    $skill->code = $slugify->slugify($data['name_en']);
                    $skill->save();
                }
                return response()->json(['success' => $success , 'message' => $message]);
            break;
            case 'associations':
                $data = $request['data'];
                $success = true;
                $message = '';
                if($success){
                    $message = trans('cms.saved_successfully');
                    $associations = new Association();
                    $associations->setTranslation('name', 'en', $data['name_en']);
                    $associations->setTranslation('name', 'ar', $data['name_ar']);
                    $slugify = new Slugify();
                    $associations->code = $slugify->slugify($data['name_en']);
                    $associations->save();
                }
                return response()->json(['success' => $success , 'message' => $message]);
            break;
            case 'degrees':
                $data = $request['data'];
                $success = true;
                $message = '';
                if($success){
                    $message = trans('cms.saved_successfully');
                    $degree = new Degree();
                    $degree->setTranslation('name', 'en', $data['name_en']);
                    $degree->setTranslation('name', 'ar', $data['name_ar']);
                    $slugify = new Slugify();
                    $degree->code = $slugify->slugify($data['name_en']);
                    $max_order = Degree::max('order') + 1;
                    $degree->order = $max_order;
                    $degree->save();
                }
                return response()->json(['success' => $success , 'message' => $message]);
            break;
            case 'researchInterests':
                $data = $request['data'];
                $success = true;
                $message = '';
                if($success){
                    $message = trans('cms.saved_successfully');
                    $researchInterests = new ResearchInterest();
                    $researchInterests->setTranslation('name', 'en', $data['name_en']);
                    $researchInterests->setTranslation('name', 'ar', $data['name_ar']);
                    $slugify = new Slugify();
                    $researchInterests->code = $slugify->slugify($data['name_en']);
                    $researchInterests->save();
                }
                return response()->json(['success' => $success , 'message' => $message]);
            break;
            case 'occupations':
                $data = $request['data'];
                $success = true;
                $message = '';
                if($success){
                    $message = trans('cms.saved_successfully');
                    $occupation = new Occupation();
                    $occupation->setTranslation('name', 'en', $data['name_en']);
                    $occupation->setTranslation('name', 'ar', $data['name_ar']);
                    $slugify = new Slugify();
                    $occupation->code = $slugify->slugify($data['name_en']);
                    $occupation->save();
                }
                return response()->json(['success' => $success , 'message' => $message]);
            break;
            default:
                return null;
            break;
        }
    }
//----------------------------------------------------------------------//
    public function get_location(Request $request) {
        $type = $request->input('type');
        $code = $request->input('code','sy');
        switch($type){
            case 'country':
                return Country::all();
                break;
            case 'city':
                return City::where('country_code',$code)->get();
                break;
            default:
                return null;
                break;
        }
    }
}
