<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Concour;
use App\Models\Domaine;
use App\Models\Publication;
use App\Models\Etablissment;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $usersCount=User::where('role','user')->count();
        $admin = User::findOrFail(Auth::id());
        $domainesCount=Domaine::count();
        $users=User::where('role','user')->get();
        $universitiesCount=Etablissment::count();
        $concoursCount=Concour::count();
        $publicationsCount=Publication::count();
        return view('Admin.dashboard', [
            'usersCount' => $usersCount,
            'domainesCount'=>$domainesCount,
            'universitiesCount'=>$universitiesCount,
            'concoursCount'=>$concoursCount,
            'publicationsCount'=>$publicationsCount,
            'users'=>$users,
            'admin'=>$admin
        ]);
    }
}
