<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function order()
    {
        return view('pages.order');
    }
}
