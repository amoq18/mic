<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Utilisateur;

class UsersController extends Controller
{
    public function home()
    {
        if(auth()->guest()){
            return redirect()->route('back.login');
        }

        return view('back.backoffice');
    }

    public function list()
    {
        $clients = Utilisateur::all()->where('isAdmin', 0);

        return view('back.customers.list', compact('clients'));
    }

    public function logoutFront()
    {
        auth()->logout();

        return redirect()->route('front.home');
    }

    public function registerBack()
    {
    	return view('back.auth.register');
    }

    public function registerBackPost()
    {
    	request()->validate([
    		'nom' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed',
    	]);

    	Utilisateur::create([
    		'nom' => request('nom'),
            'email' => request('email'),
    		'isAdmin' => 1,
    		'password' => bcrypt(request('password_confirmation')),
    	]);

        $res = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

            return redirect()->route('back.login');
    }

    public function logoutBack()
    {
        auth()->logout();

        return redirect()->route('back.login');
    }

    public function loginBack()
    {
        return view('back.auth.login');
    }

    public function loginBackPost()
    {
        $res = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($res){
            return redirect()->route('back.home')->withInput()->withErrors([
                'error' => ''
            ]);
        }

        return back()->withInput();
    }

    public function registerFront()
    {
        return view ('front.auth.register');
    }

    public function registerFrontPost()
    {
        $users = new Utilisateur;

        request()->validate([
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'telephone' => 'required|max:50',
            'email' => 'required|email|unique:utilisateurs',
            'date_naissance' => 'required',
            'adresse' => 'required',
            'pays' => 'required',
            'codePostal' => 'required',
            'devise' => 'required',
            'password' => 'confirmed|required|min:8',
        ]);

        $users->nom = request('nom');
        $users->prenom = request('prenom');
        $users->telephone = request('telephone');
        $users->email = request('email');
        $users->date_naissance = request('date_naissance');
        $users->adresse = request('adresse');
        $users->pays = request('pays');
        $users->codePostal = request('codePostal');
        $users->devise = request('devise');
        $users->password = bcrypt(request('password'));
        $users->isAdmin = 0;
        $users->montantCompte = 0;
        $users->save();

        // return back()->with('success', 'Merci pour votre inscription !');

        return redirect()->route('front.compte');
    }

    public function loginFront()
    {
        return view ('front.auth.login');
    }

    public function loginFrontPost()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $res = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($res){
            return redirect()->route('front.compte');
        }

        return back()->withInput()->withErrors([
            'email' => '']);
    }
}
