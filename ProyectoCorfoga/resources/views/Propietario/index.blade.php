@extends('welcome')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de propietario</div>
                <table class="table">
                  <thead>
                          <tr>
                            <th>Id</th>
                            <th>Cedula</th>
                            <th>Nombre</th>
                          </tr>
                          <br>
                  </thead>

                  <tbody>
                   <a href="/propietario/create" class= "btn btn-info" role="button">Crear Propietario</a> 

                    @foreach ($propietario as $propietario)
                                  <tr>
                                      <th scope="row">{{ $propietario->id }}</th>
                                      <td>{{ $propietario->usuario_cedula }}</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td>
                                            <a href="/propietario/{{$propietario->id}}" class="btn btn-success" role="button"> Detalle </a>
                                            <a href="/propietario/{{$propietario->id }}/edit" class= "btn btn-warning" role="button">Editar</a> 
                                            <form class="" action="propietario/{{ $propietario->id }}" method="post">
                                                                <input type="hidden" name="_method" value="delete">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input class= "btn btn-danger"  type="submit" name="name" value="Eliminar">
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