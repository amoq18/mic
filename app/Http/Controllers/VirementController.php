<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Virement;
use Illuminate\Support\Facades\Mail;
use App\Mail\CodeMail;
use App\Mail\CodeMail2;
use App\Utilisateur;

class VirementController extends Controller
{
    public function index()
    {
        $virements = Virement::all();

        foreach($virements as $virement) {
            $virement->user = Utilisateur::find($virement->user_id);
        }

        // dd($virements);


    	return view('back.virements.list', compact('virements'));
    }

    public function edit($id)
    {
        $virement = Virement::findOrFail($id);

    	return view('back.virements.edit', compact('virement'));
    }

    public function editPost($id)
    {
    	$virement = Virement::findOrFail($id);
    	$virement->montant = request('montant');
        $virement->code1 = request('code1');
        $virement->code2 = request('code2');
        $virement->code3 = request('code3');
    	$virement->percent = request('percent');
    	$virement->save();

        // dd($virement);

    	return redirect()->route('back.virements.index');
    }

    public function delete($id)
    {
    	$virement = Virement::findOrFail($id);
    	$virement->delete();

    	return redirect()->route('back.virements.index');
    }
}
