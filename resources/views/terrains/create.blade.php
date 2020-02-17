@extends('layout.default')
@section('content')
use App\User;
  <div class="container-fluid">
    <div class="row">

<div class="col-md-12">
 <div class="card">
  <div class="card-header card-header-primary">
     <h4 class="card-title ">Ajout Terrain</h4>
    <p class="card-category"></p>
  </div>        
<div class="card-body">
@if(isset($confirmation))
 @if($confirmation == 1)
 <div class=alert alert-success>Terrain ajouté</div>
 @else
<div class=alert alert-danger>Terrain non  ajouté</div>
@endif
@endif
<form  action="{{ route('terrains.persist') }}" method="POST">
@csrf
<div class="form-group row">
    <label for="code" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="code" name="code" placeholder="code " type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="biens_id" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
         <select name="biens_id" id="biens_id" placeholder="" name="biens_id" style="width:95%; height:40px">
            @foreach ($users as $user)
             <option value="{{ $biens_->id }}"> {{ $user->nom}}  {{ $user->prenom}} {{ $user->email}} {{ $user->password}} {{ $user->telephone}} </option>
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