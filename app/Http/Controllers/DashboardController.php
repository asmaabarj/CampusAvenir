<?php

namespace App\Http\Controllers;

use App\Models\Concour;
use App\Models\Domaine;
use App\Models\Etablissment;
use App\Models\Publication;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $usersCount=User::where('role','user')->count();
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
            'users'=>$users
        ]);
    }
}
