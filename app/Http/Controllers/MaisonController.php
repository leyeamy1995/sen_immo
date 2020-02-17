<?php

namespace App\Http\Controllers;

use App\Maison;
use Illuminate\Http\Request;

class MaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



         return view('maisons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maisons.create');
    }

     //lister
     public function list()
    {
       $liste_maisons = Maison::All();
        return view('maisons.list', [ 'liste_maisons' => $liste_maisons]);
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
     * @param  \App\Maison  $maison
     * @return \Illuminate\Http\Response
     */
    public function show(Maison $maison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maison  $maison
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $maison = Maison::find($id);

         return view('maisons.edit', ['maisons' => $maison]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maison  $maison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maison $maison)
    {

        $maison = Maison::find($request->id);
        $maison->code = $request->code;
        $maison->nom = $request->nom;
        $maison->prenom = $request->prenom;
        $maison->email = $request->email; 
        $maison->telephone = $request->telephone;

        $maison->save();

         return $this->list();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maison  $maison
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $maison = Maison::find($id);
         if( $maison != null)
         {
             $maison->delete();
         }
        return $this->list();
    }

     public function persist(Request $request)
    {
        //echo $request->code;
        $maison = new Maison();
        $maison->code = $request->code;
        $maison->nom = $request->nom;
        $maison->prenom = $request->prenom;
        $maison->email = $request->email; 
        $maison->telephone = $request->telephone;

        $result = $maison->save();
         return view('maisons.create', ['confirmation' => $result]);

         return $this->create();
    }
}
