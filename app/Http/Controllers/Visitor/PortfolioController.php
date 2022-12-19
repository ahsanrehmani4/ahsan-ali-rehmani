<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of worked projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitor.modules.portfolio.index');
    }
}
