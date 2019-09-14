<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;

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

        return view('front.compteManager');
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

    public function simulationComptePost()
    {
        $value = true;
        
        return view('front.simulationCompte', compact('value'));
    }
}
