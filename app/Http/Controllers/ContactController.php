<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use App\Http\Requests\CreateContactRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $admin = User::findOrFail(Auth::id());
        $contacts = $this->contactService->all();
        return view('Admin.contact', ['contacts' => $contacts, 'admin' => $admin]);
    }

    public function store(CreateContactRequest $request)
    {
        $validatedData = $request->validated();
        $this->contactService->create($validatedData);
        return redirect('/#contact')->with('success', 'Votre message a été envoyé avec succès.');
    }

    public function destroy($id)
    {
        $this->contactService->delete($id);
        return redirect()->back()->with('success', 'Ce message est supprimé avec succès.');
    }
}
