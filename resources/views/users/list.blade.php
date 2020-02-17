@extends('layout.default')
@section('content')

<div class="container-fluid">

          <!-- Page Heading -->


          <!-- DataTales Example -->

          <div class="card shadow mb-4">

            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Email</th>
                       <th>Password</th>
                      <th>Telephone</th>
                       <th>Role</th>
                      <th colspan=2>Operations</th>
                    </tr>
                  </thead>
                 @foreach ($liste_users as $user)
                 <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->code }}</td>
                      <td>{{ $user->nom }}</td>
                      <td>{{ $user->prenom }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->telephone }}</td>
                       <td>
        <a href="{{ url('/users/edit', ['id'=> $user->id ]) }}">
        <button class='btn btn-primary btn-xs' onClick="return confirm('voulez_vous vraiment editer?');"><span class='glyphicon glyphicon-pencil'>modifier</span></button></a>
        </td>

        <td>
        <a href="{{ url('/users/delete', ['id'=> $user->id ]) }}">
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