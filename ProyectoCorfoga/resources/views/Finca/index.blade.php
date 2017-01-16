@extends('welcome')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Fincas</div>
                <table class="table">
                  <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Región</th>
                            <th>Propietario</th>
                          </tr>
                          <br>
                  </thead>

                  <tbody>

                    @foreach ($finca as $finca)
                                  <tr>
                                      <th scope="row">{{ $finca->id }}</th>
                                      <td>{{ $finca->nombre }}</td>
                                      <td>{{ $finca->region }}</td>
                                      <td>{{ $finca->propietario_id}}</td>
                                    </tr>
                                    
                                 <tr>
                                    <td>
                                          <a href="/finca/{{$finca->id}}" class="btn btn-success" role="button"> Detalle </a>
                                          <a href="/finca/{{ $finca->id }}/edit" class= "btn btn-warning" role="button">Editar</a> 

                                          <form class="" action="finca/{{ $finca->id }}" method="post">
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