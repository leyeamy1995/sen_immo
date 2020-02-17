<?php

namespace App\Http\Controllers;

use App\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



         return view('biens.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biens.create');
    }

     //lister
     public function list()
    {
       $liste_biens = Bien::All();
        return view('biens.list', [ 'liste_biens' => $liste_biens]);
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
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function show(Bien $bien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $bien = Bien::find($id);

         return view('biens.edit', ['bien' => $bien]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bien $bien)
    {

        $bien = Bien::find($request->id);
        $bien->code = $request->code;
        $bien->nom = $request->nom;
        $bien->prenom = $request->prenom;
        $bien->email = $request->email; 
        $bien->telephone = $request->telephone;

        $bien->save();

         return $this->list();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $bien = Bien::find($id);
         if( $bien != null)
         {
             $bien->delete();
         }
        return $this->list();
    }

     public function persist(Request $request)
    {
        //echo $request->code;
        $bien = new Bien();
        $bien->code = $request->code;
        $bien->nom = $request->nom;
        $bien->prenom = $request->prenom;
        $bien->email = $request->email; 
        $bien->telephone = $request->telephone;

        $result = $bien->save();
         return view('biens.create', ['confirmation' => $result]);

         return $this->create();
    }
}
