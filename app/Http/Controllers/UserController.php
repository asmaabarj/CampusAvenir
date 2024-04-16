<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateLoginRequest;
use App\Http\Requests\CreateRegisterRequest;

class UserController extends Controller
{
    public function register(CreateRegisterRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $validatedData['password'] = bcrypt($validatedData['password']);

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
                'cpassword' => $validatedData['cpassword'],

            ]);
            auth()->login($user);

            if ($user->role == 'admin') {
                return redirect('/dashboard');
            } else {
                return redirect('/');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }


    public function login(CreateLoginRequest $request)
    {
        try {
            $validatedData = $request->validated();

            if (auth()->attempt([
                'email' => $validatedData['email'],
                'password' => $validatedData['password']
            ], $request->filled('remember_me'))) {
                $user = Auth::user();
                if ($user->role == 'admin') {
                    return redirect('/dashboard');
                } else {
                    return redirect('/');
                }
            } else {
                return redirect()->back()->withErrors([
                    'email' => 'email ou mot de passe incorrect'
                ])->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
