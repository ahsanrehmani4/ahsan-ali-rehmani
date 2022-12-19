<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a about page content.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitor.modules.about.index');
    }
}
