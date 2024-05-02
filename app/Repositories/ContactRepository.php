<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Contact;
use App\Interfaces\ContactInterface;
use Illuminate\Support\Facades\Auth;

class ContactRepository implements ContactInterface
{
    public function all()
    {
        return Contact::all();
    }
    public function admin()
    {
        return User::findOrFail(Auth::id());
    }

    public function create(array $data)
    {
        return Contact::create($data);
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    }

    public function find($id)
    {
        return Contact::findOrFail($id);
    }
}
