<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use App\Utilisateur;

class WelcomeController extends Controller
{
    public function index()
    {
    	$news = Evenement::all();

    	return view('front.home', compact('news'));
    }

    public function compte()
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }

        $user = Utilisateur::findOrFail(auth()->user()->id);

        return view('front.compteManager', compact('user'));
    }

    public function apropos()
    {
        return view('front.apropos');
    }

    public function evenementsList()
    {
        $news = Evenement::all();

        return view('front.evenementsList', compact('news'));
    }

    public function evenements($id)
    {
        $new = Evenement::findOrFail($id);

        return view('front.evenements', compact('new'));
    }

    public function prestations()
    {
        return view('front.prestations');
    }

    public function simulationCompte()
    {
    	return view('front.simulationCompte');
    }
}
