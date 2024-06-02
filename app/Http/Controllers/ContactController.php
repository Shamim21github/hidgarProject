<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('Backend.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('Backend.contacts.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'service' => 'required|string|max:255',
            'note' => 'nullable|string',
        ]);

        // Create a new contact record
        $contact = Contact::create($validatedData);

        // Send an email to the user
        Mail::to($contact->email)->send(new ContactSubmitted($contact));

        // Redirect to the contact page with a success message
        return redirect()->route('contact')->with('success', 'Thank you for your submission. A confirmation email has been sent to you.');
    }


    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('Backend.contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('Backend.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'service' => 'required|string|max:255',
            'note' => 'nullable|string',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('Backend.contacts.index')->with('success', 'Contact updated successfully');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('Backend.contacts.index')->with('success', 'Contact deleted successfully');
    }
}
