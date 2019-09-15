<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Virement;
use Illuminate\Support\Facades\Mail;
use App\Mail\CodeMail;
use App\Mail\CodeMail2;

class VirementController extends Controller
{
    public function index()
    {
    	$virements = Virement::all();

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
        dd($virement);
    	$virement->montant = request('montant');
    	$virement->save();

    	return redirect()->route('back.virements.index');
    }

    public function delete($id)
    {
    	$virement = Virement::findOrFail($id);
    	$virement->delete();

    	return redirect()->route('back.virements.index');
    }
}
