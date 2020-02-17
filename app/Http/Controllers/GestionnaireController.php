<?php

namespace App\Http\Controllers;

use App\Gestionnaire;
use App\User;
use Illuminate\Http\Request;

class GestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
       
         return view('gestionnaires.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionnaires.create');
    }

     //lister
     public function list()
    {
       $liste_gestionnaires = Gestionnaire::All();
        return view('gestionnaires.list', [ 'liste_gestionnaires' => $liste_gestionnaires]);
    }
    
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(Gestionnaire $gestionnaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $gestionnaire = Gestionnaire::find($id);

         return view('gestionnaires.edit', ['gestionnaire' => $gestionnaire]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gestionnaire $gestionnaire)
    {

        $gestionnaire = Gestionnaire::find($request->id);
        $gestionnaire->matricule = $request->matricule;


        $gestionnaire->save();

         return $this->list();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $gestionnaire = Gestionnaire::find($id);
         if( $gestionnaire != null)
         {
             $gestionnaire->delete();
         }
        return $this->list();
    }

     public function persist(Request $request)
    {
        //echo $request->code;
        $gestionnaire = new Gestionnaire();
        $gestionnaire->matricule = $request->matricule;
        $gestionnaire->users_id = $request->users_id;
        $result = $gestionnaire->save();
         return view('gestionnaires.create', ['confirmation' => $result]);

         return $this->create();
    }
}
