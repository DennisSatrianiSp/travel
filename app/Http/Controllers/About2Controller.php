<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class About2Controller extends Controller
{
    //
    public function index(){
        return Inertia::render('About2/index');
    }
}
