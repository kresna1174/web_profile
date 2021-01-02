<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $title = 'Client';
        return view('client.index', compact('title'));
    }
}
