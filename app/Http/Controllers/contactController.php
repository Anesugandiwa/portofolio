<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

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
        Mail::to('anesugandiwa9@gmail.com')->send(new contactNotification($contact));


        return redirect()->back()->with('success', 'Your message has been sent successfully!');


    }
}
