<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Show the About page.
     *
     * @return Response
     */
    public function index()
    {
        return view('marketing.about.index');
    }
}
