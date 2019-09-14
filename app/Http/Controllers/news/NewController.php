<?php

namespace App\Http\Controllers\news;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evenement;

class NewController extends Controller
{
    public function index()
    {
    	$news = Evenement::all();

        return view('back.news.list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        	'titre' => 'required|max:50',
	    	'contenue' => 'required',
	    	'photo' => 'required|max:50',
        ]);

        $news = new Evenement;

        $news->titre = $request->titre;
        $news->contenue = $request->contenue;
        $news->photo = $request->photo;
        $news->save();

        return redirect()->route('back.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Evenement::findOrFail($id);
        return view('back.news.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'max:50',
            'photo' => 'max:50',
        ]);

        $news = Evenement::findOrFail($id);

        $news->titre = $request->titre;
        $news->contenue = $request->contenue;
        $news->photo = $request->photo;
        $news->save();

        return redirect()->route('back.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $news = Evenement::findOrFail($id);
        $news->delete();
        return redirect()->route('back.news.index');
    }
}
