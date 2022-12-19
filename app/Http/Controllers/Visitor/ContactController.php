<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a contact page content.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitor.modules.contact.index');
    }
}
