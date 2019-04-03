<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Validator;

class ContactsController extends Controller
{
    /**
     * Show the Contacts page.
     *
     * @return Response
     */
    public function index()
    {
        return view('marketing.contacts.index');
    }

    /**
     * Add the entry from contacts form.
     *
     * @param  Request  $request
     * @return Response
     */
    public function addContacts(Request $request)
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

        $contact = new Contact();
        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return response()->json([
            'success' => 'Hi ' . $contact->fname . ', we have successfully recieved your message and we will get in touch soon.'
        ]);
    }

    /**
     * Get all the contacts enquirys.
     *
     * @return Response
     */
    public function getContacts()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        $timeNow = date('Y-m-d H:i:s');
        return view('admin.contacts.index', [
        'contacts' => $contacts,
        'timeNow' => $timeNow
    ]);
    }
}
