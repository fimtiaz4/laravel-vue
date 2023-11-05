<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    function Index(){
        return Inertia::render('index');
    }
}
