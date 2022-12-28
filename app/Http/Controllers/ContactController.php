<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $correo = new ContactMailable($request->all()); // envía los inputs del form al constructor de ContactMailable
        Mail::to('sam.tab.paz@gmail.com')->send($correo);

        return redirect()->route('contact.index')->with('info', 'Mensaje enviado');
    }
}
