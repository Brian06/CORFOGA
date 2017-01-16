<!DOCTYPE html>
<html>
<head>
  <title>Editar Propietario</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
      <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editando Propietario</div>

                 <div class="panel-body">

                      <form class="" action="/propietario/{{ $propietario->id}}" method="post">
                      
                     
                         <div class="form-group">
                            <label for="id" class="col-md-4 control-label">Id</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="id" value="{{$propietario->id}}" placeholder="">
                                {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="usuario_cedula"> N° Cedula del Propietario</label>
                              <select class="form-control" id="usuario_cedula"  name="usuario_cedula">
                                @foreach ($usuario as $usuario)
                                   <option>
                                        {{$usuario->id}}
                                   </option>
                                
                                @endforeach
                              </select>
                        </div>



                      <input type="hidden" name="_method" value="put">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="submit" name="name" value="edit">


                  </form>
                </div>

            </div>

        </div>

    </div>
  
  </div>

 

</body>
</html>

