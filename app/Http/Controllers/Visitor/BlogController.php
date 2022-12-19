<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of blogs content.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitor.modules.blog.index');
    }

    /**
     * Display the specified blog content.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('visitor.modules.blog.show');
    }
}
