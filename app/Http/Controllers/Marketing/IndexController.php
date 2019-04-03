<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Validator;

class IndexController extends Controller
{
    /**
     * Show the Index page.
     *
     * @return Response
     */
    public function index()
    {
        return view('marketing.index.index');
    }

    /**
     * Add the entry from newsletter form.
     *
     * @param  Request  $request
     * @return Response
     */
    public function addNewsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters',
        ]);
        if ($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all()
            ]);
        }

        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();
        return response()->json([
            'success' => 'Hi ' . $newsletter->email . ', you are successfully subscribed.'
        ]);
    }

    /**
     * Get all the newsletter subscribtion.
     *
     * @return Response
     */
    public function getNewsletter()
    {
        $newsletters = Newsletter::orderBy('created_at', 'desc')->get();
        $timeNow = date('Y-m-d H:i:s');
        return view('admin.newsletter.index', [
        'newsletters' => $newsletters,
        'timeNow' => $timeNow
    ]);
    }
}
