<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Show the Portfolio page.
     *
     * @return Response
     */
    public function index()
    {
        return view('marketing.portfolio.index');
    }
}
