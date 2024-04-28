<?php

namespace App\Repositories;

use App\Interfaces\ContactInterface;
use App\Models\Contact;

class ContactRepository implements ContactInterface
{
    public function all()
    {
        return Contact::all();
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
