<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
       
         return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

     //lister
     public function list()
    {
       $liste_users = User::All();
        return view('users.list', [ 'liste_users' => $liste_users]);
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::find($id);

         return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {

        $user = User::find($request->id);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email; 
        $user->password = $request->password;
        $user->telephone = $request->telephone;
        $user->role = $request->role;

        $user->save();

         return $this->list();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $user = User::find($id);
         if( $user != null)
         {
             $user->delete();
         }
        return $this->list();
    }

     public function persist(Request $request)
    {
        //echo $request->code;

        $user = new User();

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email; 
        $user->password = $request->password;
        $user->telephone = $request->telephone;
        $user->role = $request->role;
 
        $result = $user->save();
         return view('users.create', ['confirmation' => $result]);

         return $this->create();
    }
}
