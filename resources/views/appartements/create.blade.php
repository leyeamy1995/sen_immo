@extends('layout.default')
@section('content')
use App\User;
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
 <div class=alert alert-success>Client ajouté</div>
 @else
<div class=alert alert-danger>Client non  ajouté</div>
@endif
@endif
<form  action="{{ route('gestionnaires.persist') }}" method="POST">
@csrf
<div class="form-group row">
    <label for="text2" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="matricule" name="matricule" placeholder=" matricule " type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
         <select name="users_id" id="users_id" placeholder="" name="users_id" style="width:95%; height:40px">
            @foreach ($users as $user)
             <option value="{{ $user->id }}"> {{ $user->nom}}  {{ $user->prenom}} {{ $user->email}} {{ $user->password}} {{ $user->telephone}} </option>
              @endforeach
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