<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsPageController extends Controller
{
    public function __invoke()
    {
        return view('settings');
    }
}
