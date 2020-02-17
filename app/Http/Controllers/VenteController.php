<?php

namespace App\Http\Controllers;

use App\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



         return view('ventes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventes.create');
    }

     //lister
     public function list()
    {
       $liste_ventes = Vente::All();
        return view('ventes.list', [ 'liste_ventes' => $liste_ventes]);
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
     * @param  \App\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function show(Vente $vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $vente = Vente::find($id);

         return view('ventes.edit', ['ventes' => $vente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vente $vente)
    {

        $vente = Vente::find($request->id);
        $vente->code = $request->code;
        $vente->nom = $request->nom;
        $vente->prenom = $request->prenom;
        $vente->email = $request->email; 
        $vente->telephone = $request->telephone;

        $vente->save();

         return $this->list();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $vente = Vente::find($id);
         if( $vente != null)
         {
             $vente->delete();
         }
        return $this->list();
    }

     public function persist(Request $request)
    {
        //echo $request->code;
        $vente = new Vente();
        $vente->code = $request->code;
        $vente->nom = $request->nom;
        $vente->prenom = $request->prenom;
        $vente->email = $request->email; 
        $vente->telephone = $request->telephone;

        $result = $vente->save();
         return view('ventes.create', ['confirmation' => $result]);

         return $this->create();
    }
}
