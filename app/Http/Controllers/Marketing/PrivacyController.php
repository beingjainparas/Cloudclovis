<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyController extends Controller
{
    /**
     * Show the Privacy page.
     *
     * @return Response
     */
    public function index()
    {
        return view('marketing.privacy.index');
    }
}
