@extends('layout.default')
@section('content')

  <div class="container-fluid">
    <div class="row">

<div class="col-md-12">
 <div class="card">
  <div class="card-header card-header-primary">
     <h4 class="card-title ">Ajout Client</h4>
    <p class="card-category"></p>
  </div>        
<div class="card-body">
@if(isset($confirmation))
 @if($confirmation == 1)
 <div class=alert alert-success>User ajouté</div>
 @else
<div class=alert alert-danger>User non  ajouté</div>
@endif
@endif
<form  action="{{ route('users.persist') }}" method="POST">
@csrf

  <div class="form-group row">
    <label for="" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nom" name="nom" placeholder="nom" type="text" class="form-control">
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
        <input id="prenom" name="prenom" placeholder=" prenom" type="text" class="form-control">
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
        <input id="email" name="email" placeholder="email" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-lock"></i>
          </div>
        </div> 
        <input id="password" name="password" placeholder="mot de passe" type="password" class="form-control">
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
        <input id="telephone" name="telephone" placeholder="telephone" type="text" class="form-control">
      </div>
    </div>
  </div>
 <div class="form-group row">
    <label for="role" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
         <select name="role" id="role" placeholder="" name="role" style="width:95%; height:40px">
             <option value="" disable> ----choisir----</option>
             <option value="=">Administrateur</option>
             <option value="=">Utilisateur Simple</option>
             <option value="=">Gestionnaire</option>
              
          </select>
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