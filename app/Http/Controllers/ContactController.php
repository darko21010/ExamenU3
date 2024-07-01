<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(ContactRequest $request)
    {
        // Validar la solicitud
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Datos del correo
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Enviar correo
        Mail::to('t012700120@unitru.edu.pe')->send(new ContactMail($details));

        return redirect()->route('contact.show')->with('success', 'Mensaje enviado correctamente.');
    }
}
