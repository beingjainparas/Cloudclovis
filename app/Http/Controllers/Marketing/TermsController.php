<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermsController extends Controller
{
    /**
     * Show the Terms page.
     *
     * @return Response
     */
    public function index()
    {
        return view('marketing.terms.index');
    }
}
