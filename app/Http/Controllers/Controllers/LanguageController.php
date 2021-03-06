<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Redirect;
class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        // return $lang;
        // Session::flush();
        if (array_key_exists($lang, Config::get('languages'))) {
            session()->put('applocale', $lang);
            // App::setLocale(Session()->get('applocale'));
        }
        // return Session()->get('applocale');
        return Redirect::back();
    }
}
