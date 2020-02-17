@extends('layout.default')
@section('content')
 <div class="content">
  <div class="container-fluid">
    <div class="row">

<div class="col-md-12">
 <div class="card">
  <div class="card-header card-header-primary">
     <h4 class="card-title ">Modification Utilisateur</h4>
    <p class="card-category"></p>
  </div>        
<div class="card-body">
                 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form  action="{{ route('users.persist') }}" method="POST">
@csrf
<div class="form-group row">
    <label for="id"  class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="id" name="id"  value= "{{ $user->id }}" placeholder="identifiant utilisateur"  readonly="true"class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nom" name="nom" value= "{{ $user->nom }}" placeholder="nom" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="prenom" name="prenom" value= "{{ $user->prenom }}" placeholder=" prenom" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="email" name="email" value= "{{ $user->email }}" placeholder="email" type="text" class="form-control">
      </div>
    </div>
  </div>
   <div class="form-group row">
    <label for="text3" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-lock"></i>
          </div>
        </div> 
        <input id="password" name="password" value= "{{ $user->password }}" placeholder="mot de passe" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-phone"></i>
          </div>
        </div> 
        <input id="telephone" name="telephone"  value= "{{ $user->telephone }}"placeholder="telephone" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="role" name="role" value= "{{ $user->role }}" placeholder="role" type="text" class="form-control">
      </div>
    </div>
  </div>


  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Ajouter</button>
       <button name="reset" type="reset" class="btn btn-danger">Annuler</button>
    </div>
  </div>
</form>             
</div>
@endsection