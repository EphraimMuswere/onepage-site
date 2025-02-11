<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contact.index', compact('contact'));
    }

    public function indexOnepage()
    {
        $contact = Contact::first();
        return view('partials.contact', compact('contact'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'phone_secondary' => 'nullable',
            'email_secondary' => 'nullable|email',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.index')->with('success', 'Contact details added successfully.');
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'description' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'phone_secondary' => 'nullable',
            'email_secondary' => 'nullable|email',
        ]);

        $contact->update($request->all());

        return redirect()->route('admin.contact.index')->with('success', 'Contact details updated successfully.');
    }
}

