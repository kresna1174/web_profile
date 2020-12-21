<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandingSolutionController extends Controller
{
    public function index(){
        $title = 'Branding Solution';
        return view('branding.index', compact('title'));
    }
}
