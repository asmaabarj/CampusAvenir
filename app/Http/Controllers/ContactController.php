<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Models\contact;
use App\Models\User;

class ContactController extends Controller
{
    public function index()
    {
        $users=User::where('role','user')->get();
        $contacts = Contact::all();
        return view('Admin.contact', ['contacts' => $contacts,
                                      'users'=>$users
                                     ]);
    }

    public function store(CreateContactRequest $request)
{
    $validatedData = $request->validated();
    Contact::create($validatedData);
    return redirect('/#contact')->with('success', 'Votre message a été envoyé avec succès.');
}
public function destroy($id)
{
    $contact = contact::findOrFail($id);
    $contact->delete();
    return redirect()->back()->with('success', 'Ce message est supprimé avec succès.');
}
}
