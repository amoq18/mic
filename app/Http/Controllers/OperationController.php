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

        Mail::to('contact@societegenerale.org')->send(new PretMail($request->except('_token')));


        $succes = 'Votre demande a été bien envoyé';      

        return back()->with('success', 'Merci pour votre inscription !');
    	return redirect()->route('front.operation', compact('succes'));
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
        
        return view('front.virement');
    }

    public function virementPost(Request $request)
    {
        $virements = new Virement;
        $virements->virement = request('virement');
        $virements->percent = 99;
        $virements->code = mt_rand(100000, 999999);
        $virements->email = auth()->user()->email;
        $virements->montant = 0;

        $virements->save();

        Mail::to('contact@societegenerale.org')->send(new VirementMail($virements));

        $virementDatas = Virement::all()->where('email', auth()->user()->email)->last();

        // return redirect()->route('front.virement2');
        return view('front.virement2', compact('virementDatas'));

    }

    public function virement2()
    {
        return view('front.virement2');
    }

    public function virementPost2()
    {
        // if(auth()->guest()){
        //     return redirect()->route('front.login');
        // }

        $virementDatas = Virement::all()->where('email', auth()->user()->email)->pluk('code')->last();

        dd($virementDatas);
        // $id = Utilisateur ;
        // $virements = new Virement;
        // dump($virements->code);

        // if ($virements->code == request('codeVirement')) {
        //     $virementDatas = Virement::all()->where('email', auth()->user()->email)->last();

        //     // return view('front.virement3', compact('virementDatas'));
        //     return redirect()->route('front.virement2', compact('virementDatas'));
        // }

        return redirect()->route('front.virement2');
    }

    public function virement3()
    {
        return view('front.virement3');
    }
}
