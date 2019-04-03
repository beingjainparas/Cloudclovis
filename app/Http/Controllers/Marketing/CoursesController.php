<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Validator;

class CoursesController extends Controller
{
    /**
     * Show the Courses page.
     *
     * @return Response
     */
    public function index()
    {
        return view('marketing.courses.index');
    }

    /**
     * Show the Course Details page.
     *
     * @param  Request  $request
     * @return Response
     */
    public function courseDetails($course_id)
    {
        $courses = array(
            1 => 'data_science',
            2 => 'amazon_web_services',
            3 => 'python',
            4 => 'python_django',
            5 => 'selenium'
        );
        $view_name = 'marketing.courses.' . $courses[$course_id];
        return view($view_name);
    }

    /**
     * Add the entry from enquiry form.
     *
     * @param  Request  $request
     * @return Response
     */
    public function addEnquirys(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|max:100',
            'lname' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'bail|required|numeric|digits_between:10,12',
            'message' => 'required'
        ]);
        if ($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all()
            ]);
        }

        $enquiry = new Enquiry();
        $enquiry->fname = $request->fname;
        $enquiry->lname = $request->lname;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->message = $request->message;
        $enquiry->save();
        return response()->json([
            'success' => 'Hi ' . $enquiry->fname . ', we have successfully recieved your enquiry and we will get in touch soon.'
        ]);
    }

    /**
     * Get all the courses enquirys.
     *
     * @return Response
     */
    public function getEnquiries()
    {
        $enquirys = Enquiry::orderBy('created_at', 'desc')->get();
        $timeNow = date('Y-m-d H:i:s');
        return view('admin.enquiries.index', [
        'enquirys' => $enquirys,
        'timeNow' => $timeNow
    ]);
    }
}
