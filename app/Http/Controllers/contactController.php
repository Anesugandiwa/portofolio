<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function create()
    {

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|min:3|string',
            'email' => 'required|max:255|email|unique:contacts',
            'phone' => 'required|max:255|min:3',
            'subject' => 'required|max:255|min:3',
            'message' => 'required|max:255|min:3',
        ]);
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
