<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request)
    {
        return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {

        // Form validation
        $this->validate($request, [
            'nom_complet' => 'required',
            'Email' => 'required|email',
            'Tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Type_candidature' => 'required',
            'Description' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('nom_complet'),
            'email' => $request->get('Email'),
            'phone' => $request->get('Tel'),
            'Type' => $request->get('Type_candidature'),
            'Description' => $request->get('Description'),
        ), function ($message) use ($request) {
            $message->from($request->Email);
            $message->to('closeclose159@gmail.com', 'Admin')->subject($request->get('Type_candidature'));
        });
        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
