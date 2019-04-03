<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Community;
use Validator;

class CommunityController extends Controller
{
    /**
     * Show the communitys page.
     *
     * @return Response
     */
    public function index()
    {
        return view('marketing.community.index');
    }

    /**
     * Add the entry from contacts form.
     *
     * @param  Request  $request
     * @return Response
     */
    public function addCommunity(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'bail|required|numeric|digits_between:10,12',
            'branch' => 'required',
            'acad_year' => 'required',
            'higher_studies' => 'required',
            'work_after_grad' => 'required',
            'no_work_then_what' => 'required',
            'intrested_domain' => 'required',
            'rate_skills' => 'required',
            'carreer_guidance' => 'required',
            'message' => 'required'
        ]);
        if ($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all()
            ]);
        }

        $community = new Community();
        $community->name = $request->name;
        $community->email = $request->email;
        $community->phone = $request->phone;
        $community->branch = $request->branch;
        $community->acad_year = $request->acad_year;
        $community->higher_studies = $request->higher_studies;
        $community->work_after_grad = $request->work_after_grad;
        $community->no_work_then_what = $request->no_work_then_what;
        $community->intrested_domain = $request->intrested_domain;
        $community->rate_skills = $request->rate_skills;
        $community->carreer_guidance = $request->carreer_guidance;
        $community->message = $request->message;
        $community->save();
        return response()->json([
            'success' => 'Hi ' . $community->name . ', we have successfully recieved your data and we will get in touch soon.'
        ]);
    }

    /**
     * Get all the communities enquirys.
     *
     * @return Response
     */
    public function getCommunities()
    {
        $communities = Community::orderBy('created_at', 'desc')->get();
        $timeNow = date('Y-m-d H:i:s');
        return view('admin.community.index', [
        'communities' => $communities,
        'timeNow' => $timeNow
    ]);
    }
}
