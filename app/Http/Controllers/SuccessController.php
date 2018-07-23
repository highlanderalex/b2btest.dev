<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function index(Request $request, $id_click)
    {
        if($request->session()->has('id_click') && $request->session()->get('id_click') == $id_click)
        {
            $data = $request->session()->get('data');
            $request->session()->flush();
            return view('site.success', compact('id_click', 'data'));
        }

        return view('errors.404', []);
    }
}
