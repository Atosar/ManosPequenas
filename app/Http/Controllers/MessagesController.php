<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

use Mail;
use App\Mail\MessageMail;

class MessagesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $message = new Message($request->all());

      // Send email 
      $mail = 'manos.peque@gmail.com';
      Mail::to($mail)->send(new MessageMail($message));  

      flash()->overlay('Mcuhas gracias por contactarte, te responderemos cuanto antes!', 'Se ha enviado el mensaje correctamente!');

      return redirect()->route('home.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
