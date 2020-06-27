<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKaderController extends Controller
{
     public function index()
    {
        return view('datakader');
    }
}
