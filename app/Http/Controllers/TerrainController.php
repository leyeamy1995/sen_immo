<?php

namespace App\Http\Controllers;

use App\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



         return view('terrains.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terrains.create');
    }

     //lister
     public function list()
    {
       $liste_terrains = Terrain::All();
        return view('terrains.list', [ 'liste_terrains' => $liste_terrains]);
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
     * @param  \App\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function show(Terrain $terrain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $terrain = Terrain::find($id);

         return view('terrains.edit', ['terrains' => $terrain]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terrain $terrain)
    {

        $terrain = Terrain::find($request->id);
        $terrain->code = $request->code;
        $terrain->nom = $request->nom;
        $terrain->prenom = $request->prenom;
        $terrain->email = $request->email; 
        $terrain->telephone = $request->telephone;

        $terrain->save();

         return $this->list();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $terrain = Terrain::find($id);
         if( $terrain != null)
         {
             $terrain->delete();
         }
        return $this->list();
    }

     public function persist(Request $request)
    {
        //echo $request->code;
        $terrain = new Terrain();
        $terrain->code = $request->code;
        $terrain->nom = $request->nom;
        $terrain->prenom = $request->prenom;
        $terrain->email = $request->email; 
        $terrain->telephone = $request->telephone;

        $result = $terrain->save();
         return view('terrains.create', ['confirmation' => $result]);

         return $this->create();
    }
}
