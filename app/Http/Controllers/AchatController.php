<?php

namespace App\Http\Controllers;
use App\Models\Achat;
use App\Models\User;
use Illuminate\support\facade\hash;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AchatController extends Controller
{
    public function index(){
        return view('index');
    }
    public function inscription(){
        return view('inscription');
    }
    public function connexion(){
        return view('connexion');
    }
    public function dashboard(){
        return view('dashboard');
    }

    public function envoie (Request $request){
        User::create([
            'name'=> $requst-> name,
            'prenom'=> $request-> prenom,
            'numero telephone'=> $request-> numero,
            'commune'=> $request-> commune,
            'password'=>hash::make($request->password),





        ]

        );
        return 'donner envoyer avec succes';
    }





}
