<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $title = 'Web Profile';
        return view('beranda.index', compact('title'));
    }
}
