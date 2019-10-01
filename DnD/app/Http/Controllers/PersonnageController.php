<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnage;

class PersonnageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnages = Personnage::personnageExistant();
        return view('personnages.index', ['personnages' => $personnages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),
            ['nomPersonnage' => 'required|min:5|max:100'],
            ['forcePersonnage' => 'required|numeric|min:3|max:18'],
            ['dexteritePersonnage' => 'required|numeric|min:3|max:18'],
            ['constitutionPersonnage' => 'required|numeric|min:3|max:18'],
            ['intelligencePersonnage' => 'required|numeric|min:3|max:18'],
            ['sagessePersonnage' => 'required|numeric|min:3|max:18'],
            ['charismePersonnage' => 'required|numeric|min:3|max:18']
        );

        Personnage::create([
            'nom' => request('nomPersonnage'),
            'force' => request('forcePersonnage'),
            'dexterite' => request('dexteritePersonnage'),
            'constitution' => request('constitutionPersonnage'),
            'intelligence' => request('intelligencePersonnage'),
            'sagesse' => request('sagessePersonnage'),
            'charisme' => request('charismePersonnage')
        ]);
        return redirect('/personnages');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personnage $personnage)
    {
        return view('personnages.show', ['personnage' => $personnage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
