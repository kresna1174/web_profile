<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $title = 'Beranda';
        return view('beranda.index', compact('title'));
    }
}
