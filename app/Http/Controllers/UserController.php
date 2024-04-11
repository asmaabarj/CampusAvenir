<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(CreateRegisterRequest $request)
    {
        try {
   
        $validatedData = $request->validated();
    
        $user = User::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'tele' => $validatedData['tele'],
            'adresse' => $validatedData['adresse'],
            'date_naissance' => $validatedData['date_naissance'],
            'niveau' => $validatedData['niveau'],
            'ecole' => $validatedData['ecole'],
            'password' => $validatedData['password'],
            'cpassword' =>$validatedData['cpassword'],
        ]);
        return redirect('/');

    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
    }
     
    
    }
    
}
