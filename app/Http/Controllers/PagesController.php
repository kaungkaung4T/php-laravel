<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about() {
        $name = "kaungkaungkaung";
        return view("template.work", compact("name"));
    }
}
