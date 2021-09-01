<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index () {
        $dataContact = Contact::all();
        return view('pages.main', compact('dataContact'));
    }
    
    public function create () {
        return view('backoffice.contactBO.create');
    }

    public function store (Request $request) {

        request()->validate([
            "location"=>["required", "min:1", "max:40"],
            "locaDescription"=>["required", "min:1", "max:300"],
            "email"=>["required", "min:1", "max:70"],
            "emailDescription"=>["required", "min:1", "max:300"],
            "call"=>["required", "min:1", "max:40"],
            "callDescription"=>["required", "min:1", "max:300"],
            "src"=>["required", "min:1", "max:100"],
        ]);

        $newContact = new Contact();
        $newContact->location = $request->location;
        $newContact->locaDescription = $request->locaDescription;
        $newContact->email = $request->email;
        $newContact->emailDescription = $request->emailDescription;
        $newContact->call = $request->call;
        $newContact->callDescription = $request->callDescription;
        $newContact->src = $request->src;
        $newContact->save();
        return redirect()->route('contact_bo');
    }

    public function destroy (Contact $id) {
        $id->delete();
        return redirect()->back();
    }

    public function show (Contact $id) {
        $dataContact = Contact::all();
        $contacts = $id;
        return view('backoffice.contactBO.show', compact('contacts', 'dataContact'));
    }

    public function edit (Contact $id) {
        $contacts = $id;
        $dataCon = Contact::all();
        return view('backoffice.contactBO.edit', compact('contacts','dataCon'));
    }

    public function update (Contact $id, Request $request) {

        request()->validate([
            "location"=>["required", "min:1", "max:40"],
            "locaDescription"=>["required", "min:1", "max:300"],
            "email"=>["required", "min:1", "max:70"],
            "emailDescription"=>["required", "min:1", "max:300"],
            "call"=>["required", "min:1", "max:40"],
            "callDescription"=>["required", "min:1", "max:300"],
            "src"=>["required", "min:1", "max:100"],
        ]);
        
        $contact = $id;
        $contact->location = $request->location;
        $contact->locaDescription = $request->locaDescription;
        $contact->email = $request->email;
        $contact->emailDescription = $request->emailDescription;
        $contact->call = $request->call;
        $contact->callDescription = $request->callDescription;
        $contact->src = $request->src;
        $contact->save();
        return redirect('/');
    }
}
