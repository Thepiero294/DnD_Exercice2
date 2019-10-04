<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnage;
use App\Equipement;

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
    public function store()
    {
        $this->validate(request(),[
            'nomPerso' => 'required|min:5|max:100',
            'forcePerso' => 'required|integer|between:3,18',
            'dexteritePerso' => 'required|integer|between:3,18',
            'constitutionPerso' => 'required|integer|between:3,18',
            'intelligencePerso' => 'required|integer|between:3,18',
            'sagessePerso' => 'required|integer|between:3,18',
            'charismePerso' => 'required|integer|between:3,18'
        ]);

        Personnage::create([
            'nom' => request('nomPerso'),
            'force' => request('forcePerso'),
            'dexterite' => request('dexteritePerso'),
            'constitution' => request('constitutionPerso'),
            'intelligence' => request('intelligencePerso'),
            'sagesse' => request('sagessePerso'),
            'charisme' => request('charismePerso')
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
        $equipements = Equipement::where('personnage_id', "=", $personnage->id)->get();
        return view('personnages.show', ['personnage' => $personnage, 'equipements' => $equipements]);
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
    public function update($id)
    {
        $this->validate(request(),[
            'nomEquipement' => 'required|min:5|max:100'
        ]);
        $equipement = new Equipement();
        $equipement->nom_equipement = request("nomEquipement");
        $equipement->personnage_id = $id;

        $equipement->save();
        return redirect()->route("personnages.show", $id);
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
