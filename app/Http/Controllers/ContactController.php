<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // index
    public function index()
    {
        return view('frontpages.contactpages.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('farhanmuhamadfahrezi@gmail.com')->send(new Contact($data));

        return redirect(route('contact.index'))->with('condition', "Thank you, we'll be in touch soon!");
    }
}
