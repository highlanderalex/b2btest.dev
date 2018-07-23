<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index(Request $request, $id_click)
    {
        if($request->session()->has('id_click') && $request->session()->get('id_click') == $id_click)
        {
            $data = $request->session()->get('data');
            if($request->session()->has('bad_domain'))
            {
                $view = view('site.error', compact('id_click', 'data'))->render();
                $request->session()->flush();
                return response($view, 200)
                    ->header('Content-type', 'text/html')
                    ->header('Refresh', '5; url=http://google.com');
            }
            $request->session()->flush();
            return view('site.error', compact('id_click', 'data'));
        }

        return view('errors.404', []);
    }
}
