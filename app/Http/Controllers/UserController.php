<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Domaine;
use App\Models\commentaire;
use App\Models\publication;
use App\Models\Etablissment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CreateLoginRequest;
use App\Http\Requests\CreateRegisterRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Models\favoris;
use App\Models\Review;

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
            $userBanned = User::withTrashed()->where('email', $validatedData['email'])->first();
            if ($userBanned->trashed()) {
                auth()->logout();

                return redirect('/login')->with('error', 'Votre compte a été banni');
            }
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

    public function profileAdmin()
    {
        $admin = User::findOrFail(Auth::id());
        return view('Admin.profileAdmin', [
            'admin' => $admin
        ]);
    }

    public function updateProfile(UpdateUserRequest $request)
    {
        $user = Auth::user();
        $request->validated();
        
        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->tele = $request->tele;
        $user->adresse = $request->adresse;
    if(($request->niveau!=NULL))
    {
        $user->date_naissance = $request->date_naissance;
        $user->niveau = $request->niveau;
        $user->ecole = $request->ecole;
    }
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images', 'public');
            $user->photo = $photoPath;
        }
    /** @var \App\Models\User $user **/

        $user->save();
    
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = Auth::user();

        $request->validated();

        if (!Hash::check($request->oldpassword, $user->password)) {
            return redirect()->back()->withErrors(['oldpassword' => 'Le mot de passe actuel est incorrect']);
        }

        $user->password = bcrypt($request->newpassword);
        /** @var \App\Models\User $user **/
        $user->save();

        return redirect()->back()->with('success', 'Mot de passe mis à jour avec succès.');
    }


    public function profileUser()
    {
        $universitiesnav=Etablissment::inRandomOrder()
            ->limit(5)
            ->get();
        $user = User::findOrFail(Auth::id());
        $domainesnav = Domaine::inRandomOrder()
        ->limit(5)
        ->get();
        Carbon::setLocale('fr');
        $postes=publication::where('status','1')->get()->where('user_id', Auth::id());
        $publications = Publication::with(['user', 'commentaires.user'])
        ->orderBy('created_at', 'desc')
        ->get();
        return view('profileUser', [
            'user' => $user,
            'domainesnav'=>$domainesnav,
            'publications' => $publications,
            'postes'=>$postes,
            'universitiesnav'=>$universitiesnav


        ]);
    }
    public function deleteAccount($id)
    {
        $user = User::find($id);

        if ($user) {
            $user = user::where('id', $id)->first();
            if ($user) {
                $user->delete();
                commentaire::where('user_id', $user)->delete();
                favoris::where('user_id', $user)->delete();
                publication::where('user_id',$user)->delete();
                Review::where('user_id',$user)->delete();
            }


            $user->delete();
        } else {
        }

        return redirect()->back()->with('error', 'cet utilisateur a été banné avec succès ');
    }
    
}
