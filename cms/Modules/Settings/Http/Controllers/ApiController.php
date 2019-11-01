<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Cocur\Slugify\Slugify;
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
        switch($type){
            case 'skills':
                return Skill::all();
            break;
            case 'associations':
                return Association::all();
            break;
            case 'degrees':
                return Degree::all();
            break;
            case 'researchInterests':
                return ResearchInterest::all();
            break;
            case 'occupations':
                return Occupation::all();
            break;
            default:
                return null;
            break;
        }
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
                    $degree->code = $slugify->slugify($data['name_en']);
                    $degree->save();
                }
                return response()->json(['success' => $success , 'message' => $message]);
            break;
            case 'associations':
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
                    $degree->save();
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
                    $degree = new Degree();
                    $degree->setTranslation('name', 'en', $data['name_en']);
                    $degree->setTranslation('name', 'ar', $data['name_ar']);
                    $slugify = new Slugify();
                    $degree->code = $slugify->slugify($data['name_en']);
                    $degree->save();
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
}
