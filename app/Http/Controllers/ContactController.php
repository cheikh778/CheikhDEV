<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller



{

    public function index()
    {
        return view('index');
    }
    public function submitContactForm(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        try {
            Mail::to('cheikhdev2024@gmail.com')->send(new ContactFormMail($data));
            return redirect()->route('index')->with('success', 'Votre message a été envoyé avec succés! Nous vous répondrons dans les plus brefs délais.');
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'Oops! une erreur s\'est produite lors de l\'envoi du message. S\'il vous plaît réessayer plus tard.');
        }


}
}
