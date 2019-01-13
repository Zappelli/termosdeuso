<?php

namespace Termos\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $layout = 'layouts.public';

    public function index()
    {
        return view('site.index');
    }
}
