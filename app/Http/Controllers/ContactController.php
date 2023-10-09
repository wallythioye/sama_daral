<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('contact.liste_message', compact('messages'));
    }

    public function create()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.create')
            ->with('success', 'Message envoyé avec succes.');
    }
}
