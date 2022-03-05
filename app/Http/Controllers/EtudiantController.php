<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  Etudiant::all();
        return  view('pages.etudiants.etudiant_index')->with(["etudiants"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.etudiants.etudiant_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudiant =new Etudiant();
        $etudiant->matricule = $request->input('matricule');
        $etudiant->noms = $request->input('noms');
        $etudiant->age = $request->input('age');

        $etudiant->save();

        return  redirect()->route('etudiants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $etudiant = Etudiant::where('id','=',$id)->first();
        return  view('pages.etudiants.etudiant_show')->with(['etudiant'=>$etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::where('id','=',$id)->first();
        return view('pages.etudiants.etudiant_edit')->with(['etudiant'=>$etudiant]);
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
        $etudiant = Etudiant::where('id','=',$id)->first();

        $etudiant->matricule = $request->input('matricule');
        $etudiant->noms = $request->input('noms');
        $etudiant->age = $request->input('age');

        $etudiant->update();
        return  redirect()->route('etudiants');


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

    public function delete($id){
        $etudiant = Etudiant::where('id','=',$id)->first();
        $etudiant->delete();
        return  redirect()->route('etudiants');
    }
}
