<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contatti.index');
    }

    public function submit(Request $request){
        Mail::to('daniel.luongo5@gmail.com')->send(new ContactForm($request));

        return redirect('/');
    }
}
