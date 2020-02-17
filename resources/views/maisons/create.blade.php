@extends('layout.default')
@section('content')
use App\User;
  <div class="container-fluid">
    <div class="row">

<div class="col-md-12">
 <div class="card">
  <div class="card-header card-header-primary">
     <h4 class="card-title ">Ajout Maison</h4>
    <p class="card-category"></p>
  </div>        
<div class="card-body">
@if(isset($confirmation))
 @if($confirmation == 1)
 <div class=alert alert-success>Maison ajouté</div>
 @else
<div class=alert alert-danger>Maison non  ajouté</div>
@endif
@endif
<form  action="{{ route('maisons.persist') }}" method="POST">
@csrf
<div class="form-group row">
    <label for="numero" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="numero" name="numero" placeholder=" numero " type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nbr_chambre" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nbr_chambre" name="nbr_chambre" placeholder=" nombre chambre " type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="type" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-steam-symbol"></i>
          </div>
        </div> 
         <select name="type" id="type" placeholder="" name="type" style="width:95%; height:40px">
             <option value="" disable> ----choisir----</option>
             <option value="=">F1</option>
             <option value="=">F2</option>
             <option value="=">F3</option>
             <option value="=">F4</option>
          </select>
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
             <option value="{{ $biens->id }}"> {{ $user->nom}}  {{ $user->prenom}} {{ $user->email}} {{ $user->password}} {{ $user->telephone}} </option>
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