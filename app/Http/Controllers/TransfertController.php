<?php

namespace App\Http\Controllers;

use App\Transfert;
use App\Utilisateur;
use Illuminate\Http\Request;

class TransfertController extends Controller
{
    public function index()
    {
        $transferts = Transfert::all();

        foreach($transferts as $transfert) {
            $transfert->user = Utilisateur::find($transfert->user_id);
        }

        // dd($transferts);


    	return view('back.transferts.list', compact('transferts'));
    }

    public function edit($id)
    {
        $transfert = Transfert::findOrFail($id);

    	return view('back.transferts.edit', compact('transfert'));
    }

    public function editPost($id)
    {
    	$transfert = Transfert::findOrFail($id);
    	$transfert->montant = request('montant');
        $transfert->code1 = request('code1');
        $transfert->code2 = request('code2');
        $transfert->code3 = request('code3');
    	$transfert->percent = request('percent');
    	$transfert->save();

        // dd($transfert);

    	return redirect()->route('back.transferts.index');
    }

    public function delete($id)
    {
    	$transfert = Transfert::findOrFail($id);
    	$transfert->delete();

    	return redirect()->route('back.transferts.index');
    }
}
