<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index()
    {
        $domains = Domain::get(['id', 'name'])->sortByDesc('id');
        return view('site.domain', compact('domains'));
    }

    public function add(Request $request)
    {
        if(!$this->isAjax())
            return view('errors.404', []);

        $domain = trim($request->domain);
        $pattern = '/^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$/';
        if(!$domain || !preg_match($pattern, $domain))
        {
            $data['error'] = 'Domain name is wrong';
        }
        else
        {
            $check_domain = Domain::where('name', '=', $domain)->get();
            if(count($check_domain))
            {
                $data['error'] = 'Domain name exists';
            }
            else
            {
                $input['name'] = $domain;
                $model = new Domain();
                $model->fill($input);
                if($model->save())
                {
                    $data['success'] = 'OK';
                    $data['message'] = 'Domain: ' . $domain . ' success was added';
                }
            }
        }

        return response(json_encode($data), 200)
            ->header('Content-Type', 'application/json');
    }
}
