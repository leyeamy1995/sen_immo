<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



         return view('clients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

     //lister
     public function list()
    {
       $liste_clients = Client::All();
        return view('clients.list', [ 'liste_clients' => $liste_clients]);
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
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $client = Client::find($id);

         return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {

        $client = Client::find($request->id);
        $client->code = $request->code;
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->email = $request->email; 
        $client->telephone = $request->telephone;

        $client->save();

         return $this->list();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $client = Client::find($id);
         if( $client != null)
         {
             $client->delete();
         }
        return $this->list();
    }

     public function persist(Request $request)
    {
        //echo $request->code;
        $client = new Client();
        $client->code = $request->code;
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->email = $request->email; 
        $client->telephone = $request->telephone;

        $result = $client->save();
         return view('clients.create', ['confirmation' => $result]);

         return $this->create();
    }
}
