<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a home page content.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitor.modules.home.index');
    }
}
