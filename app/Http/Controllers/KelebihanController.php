<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class KelebihanController extends Controller
{
    //
    public function index(){
        return Inertia::render('Kelebihan/index');
    }
}
