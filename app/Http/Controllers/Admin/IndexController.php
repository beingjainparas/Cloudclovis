<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Show the Index page.
     *
     * @return Response
     */
    public function index()
    {
        return redirect('login');
    }
}
