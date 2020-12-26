<?php

namespace App\Http\Controllers;

use App\Mail\Hubungi_kamiMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Hubungi_kamiController extends Controller
{
    public function index(){
        $title = 'Hubungi Kami';
        return view('hubungi_kami.index', compact('title'));
    }
    public function mail(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'messages' => 'required'
           ]);
      
              $data = array(
                  'name' => $request->name,
                  'email' => $request->email,
                  'phone' => $request->phone,
                  'messages' => $request->messages
              );
      
           Mail::to('corp.haltec@gmail.com')->send(new Hubungi_kamiMail($data));
           return back()->with('success', "Terimakasih sudah mengirim kami pesan ^-^");
    }
}
