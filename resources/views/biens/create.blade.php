@extends('layout.default')
@section('content')

  <div class="container-fluid">
    <div class="row">

<div class="col-md-12">
 <div class="card">
  <div class="card-header card-header-primary">
     <h4 class="card-title ">Ajout Biens</h4>
    <p class="card-category"></p>
  </div>        
<div class="card-body">
@if(isset($confirmation))
 @if($confirmation == 1)
 <div class=alert alert-success>Bien ajouté</div>
 @else
<div class=alert alert-danger>Bien non  ajouté</div>
@endif
@endif
<form  action="{{ route('biens.persist') }}" method="POST">
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
        <input id="numero" name="numero" placeholder="numero" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="prix" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="prix" name="prix" placeholder="prix" type="double" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="adresse" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-home"></i>
          </div>
        </div> 
        <input id="adresse" name="adresse" placeholder=" adresse" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="description" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-sticky-note"></i>
          </div>
        </div> 
        <input id="description" name="description" placeholder="description" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="superficie" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-node"></i>
          </div>
        </div> 
        <input id="superficie" name="superficie" placeholder="superficie" type="double" class="form-control">
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
         <select name="type" id="categorie" placeholder="" name="type" style="width:95%; height:40px">
             <option value="" disable> ----choisir----</option>
             <option value="=">Maison</option>
             <option value="=">Terrain</option>
            <option value="=">Appartement</option>
          </select>
      </div>
    </div>
  </div>

 <div class="form-group row">
    <label for="categorie" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-card"></i>
          </div>
        </div> 
         <select name="categorie" id="categorie" placeholder="" name="categorie" style="width:95%; height:40px">
             <option value="" disable> ----choisir----</option>
             <option value="=">Vente</option>
             <option value="=">Location</option>
          </select>
      </div>
    </div>
  </div>

<div class="form-group row">
    <label for="categorie" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-file-upload"></i>
          </div>
        </div> 
         <input name="image" id="image"  type ="file" placeholder="" name="image" style="width:95%; height:40px">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="latitude" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-file-upload"></i>
          </div>
        </div> 
         <input name="latitude" id="latitude"  type ="file" placeholder="latitude" name="latitude" style="width:95%; height:40px">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="longitude" class="col-4 col-form-label"></label> 
    <div class="col-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-file-upload"></i>
          </div>
        </div> 
         <input name="longitude" id="longitude"  type ="file" placeholder="longitude" name="longitudee" style="width:95%; height:40px">
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