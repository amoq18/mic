<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use App\Utilisateur;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Virement;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
    	$news = Evenement::all();

    	return view('front.home', compact('news'));
    }


    public function contact(Request $request)
    {
        Mail::to('infoline@oursocietygenerale.com')->send(new ContactMail($request->except('_token')));

        $succes = 'Votre demande de prêt a été bien envoyé !';

        return back()->withSuccess($succes);
    }

    public function compte()
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }

        $user = Utilisateur::findOrFail(auth()->user()->id);
        $banque = Virement::where('user_id', $user->id)->orderBy('created_at', 'desc')->limit(1)->get();

        if($banque->count() != 0) {
            $virement = 0;
            $banque = $banque[0];
        }

        return view('front.compteManager', compact(['user', 'banque', 'virement']));
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
