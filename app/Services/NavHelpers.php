<?php

namespace App\Services;

use Illuminate\Support\Facades\Request;

class NavHelpers {


    static function styleActiveLink($name) {
        $activeLinkStyle = 'border-b-blue border-b-4';

        return Request::route()->getName() == $name ? $activeLinkStyle : '';
    }

}