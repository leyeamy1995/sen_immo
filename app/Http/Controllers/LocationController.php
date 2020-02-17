<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



         return view('locations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
    }

     //lister
     public function list()
    {
       $liste_locations = Location::All();
        return view('locations.list', [ 'liste_locations' => $liste_locations]);
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
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $location = Location::find($id);

         return view('locations.edit', ['locations' => $location]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {

        $location = Location::find($request->id);
        $location->code = $request->code;
        $location->nom = $request->nom;
        $location->prenom = $request->prenom;
        $location->email = $request->email; 
        $location->telephone = $request->telephone;

        $location->save();

         return $this->list();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $location = Location::find($id);
         if( $location != null)
         {
             $location->delete();
         }
        return $this->list();
    }

     public function persist(Request $request)
    {
        //echo $request->code;
        $location = new Location();
        $location->code = $request->code;
        $location->nom = $request->nom;
        $location->prenom = $request->prenom;
        $location->email = $request->email; 
        $location->telephone = $request->telephone;

        $result = $location->save();
         return view('locations.create', ['confirmation' => $result]);

         return $this->create();
    }
}
