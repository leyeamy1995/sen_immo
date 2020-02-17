@extends('layout.default')
@section('content')

<div class="container-fluid">

          <!-- Page Heading -->


          <!-- DataTales Example -->

          <div class="card shadow mb-4">

            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des Gestionnaires</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Email</th>
                      <th>Telephone</th>
                      <th colspan=2>Operations</th>
                    </tr>
                  </thead>
                 @foreach ($liste_clients as $client)
                 <tr>
                      <td>{{ $client->id }}</td>
                      <td>{{ $client->code }}</td>
                      <td>{{ $client->nom }}</td>
                      <td>{{ $client->prenom }}</td>
                      <td>{{ $client->email }}</td>
                      <td>{{ $client->telephone }}</td>
                       <td>
        <a href="{{ url('/clients/edit', ['id'=> $client->id ]) }}">
        <button class='btn btn-primary btn-xs' onClick="return confirm('voulez_vous vraiment editer?');"><span class='glyphicon glyphicon-pencil'>modifier</span></button></a>
        </td>

        <td>
        <a href="{{ url('/clients/delete', ['id'=> $client->id ]) }}">
        <button class='btn btn-danger btn-xs' onClick="return confirm('voulez_vous vraiment suppimer?');">
        <span class='glyphicon glyphicon-trash'>supprimer</span></button></a>
        </td>
        </tr>
          @endforeach
                </table>
              </div>
               
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

@endsection