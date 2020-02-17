<?php

namespace App\Http\Controllers;

use App\Appartement;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



         return view('appartements.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appartements.create');
    }

     //lister
     public function list()
    {
       $liste_appartements = Appartement::All();
        return view('appartements.list', [ 'liste_appartements' => $liste_appartements]);
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
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function show(Appartement $appartement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $appartement = Appartement::find($id);

         return view('appartements.edit', ['appartements' => $appartement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appartement $appartement)
    {

        $appartement = Appartement::find($request->id);
        $appartement->code = $request->code;
        $appartement->nom = $request->nom;
        $appartement->prenom = $request->prenom;
        $appartement->email = $request->email; 
        $appartement->telephone = $request->telephone;

        $appartement->save();

         return $this->list();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $appartement = Appartement::find($id);
         if( $appartement != null)
         {
             $appartement->delete();
         }
        return $this->list();
    }

     public function persist(Request $request)
    {
        //echo $request->code;
        $appartement = new Appartement();
        $appartement->code = $request->code;
        $appartement->nom = $request->nom;
        $appartement->prenom = $request->prenom;
        $appartement->email = $request->email; 
        $appartement->telephone = $request->telephone;

        $result = $appartement->save();
         return view('appartements.create', ['confirmation' => $result]);

         return $this->create();
    }
}
