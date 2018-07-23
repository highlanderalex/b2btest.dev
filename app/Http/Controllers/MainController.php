<?php

namespace App\Http\Controllers;

use App\Click;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = Click::all()->sortByDesc('id');
        return view('site.index', compact('data'));
    }
}
