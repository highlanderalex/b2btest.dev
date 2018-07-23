<?php

namespace App\Http\Controllers;

use App\Click;
use App\Domain;
use Illuminate\Http\Request;

class ClickController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->param1 || !$request->param2 || !isset($_SERVER['HTTP_REFERER']))
            return view('errors.404', []);

        mt_srand(make_seed());
        $id_click = mt_rand();

        $data['ua'] = $_SERVER['HTTP_USER_AGENT'];
        $data['ip'] = $_SERVER['REMOTE_ADDR'];
        $data['ref'] = $_SERVER['HTTP_REFERER'];
        $data['param1'] = $request->param1;
        $data['param2'] = $request->param2;

        $request->session()->put('id_click', $id_click);
        $request->session()->put('data', $data);

        $find_click = Click::whereUa($data['ua'])->whereIp($data['ip'])
            ->whereRef($data['ref'])
            ->whereParam1($data['param1'])
            ->first();

        if(!$find_click)
        {
            $model = new Click();
            $model->fill($data);
            $model->save();
            return redirect('/success/' . $id_click);
        }
        else
        {
            $find_click->error++;
            $find_click->save();
            $domain = str_replace('www.', '', parse_url($data['ref'], PHP_URL_HOST));
            $find_domain = Domain::whereName($domain)->first();
            if($find_domain)
            {
                $find_click->bad_domain = 1;
                $find_click->save();
                $request->session()->put('bad_domain', true);
            }
            return redirect('/error/' . $id_click);
        }

    }
}
