@extends('welcome')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
             
                <table class="table">
                  <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Rol</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                          <br>
                  </thead>

                  <tbody>
                               @foreach ($usuario as $usuario)
                                  <tr>
                                      <th scope="row">{{ $usuario->id }}</th>
                                      <td>{{ $usuario->nombre }}</td>
                                      <td>{{ $usuario->email }}</td>
                                      <td>{{ $usuario->telefono}}</td>
                                      <td>{{ $usuario->rol}}</td>
                                      <td>
                                        <a href="/usuario/{{$usuario->id}}" class="btn btn-success btn-sm" role="button"> Detalle </a>
                                      </td>

                                      <td>
                                        <a href="/usuario/{{ $usuario->id }}/edit" class= "btn btn-warning btn-sm" role="button">Editar</a> 
                                      </td>

                                      <td>
                                      <form class="" action="usuario/{{ $usuario->id }}" method="post">
                                                <input type="hidden" name="_method" value="delete">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input class= "btn btn-danger btn-sm"  type="submit" name="name" value="Eliminar">
                                        </form>
                                            
                                      </td>
                                      
                                      
                                  </tr>
                                           
                    @endforeach


            </tbody>
            </table>
          </div>
        </div>
      </div>

   </div>



   
   @endsection 