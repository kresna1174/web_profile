<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index(){
        $title = 'Web Profile';
        return view('tentangkami.index', compact('title'));
    }
}
