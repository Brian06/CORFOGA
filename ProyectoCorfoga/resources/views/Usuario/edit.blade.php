<!DOCTYPE html>
<html>
<head>
  <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
      <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editando Usuario</div>

                 <div class="panel-body">

                      <form class="" action="/usuario/{{ $usuario->id}}" method="post">
                      
                     
                         <div class="form-group">
                            <label for="id" class="col-md-4 control-label">Id</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="id" value="{{$usuario->id}}" placeholder="">
                                {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                            </div>
                        </div>



                       <div class="form-group">
                              <label for="nombre" class="col-md-4 control-label">Nombre</label>

                              <div class="col-md-6">
                                  <input class="form-control" type="text" name="nombre" value="{{$usuario->nombre}}" placeholder="">
                                  {{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}
                              </div>
                          </div>



                      <div class="form-group">
                              <label for="email" class="col-md-4 control-label">Email</label>

                              <div class="col-md-6">
                                  <input class="form-control" type="text" name="email" value="{{$usuario->email}}" placeholder="">
                                  {{ ($errors->has('email')) ? $errors->first('email') : '' }}
                              </div>
                          </div>



                      <div class="form-group">
                              <label for="telefono" class="col-md-4 control-label">Telefono</label>

                              <div class="col-md-6">
                                  <input class="form-control" type="text" name="telefono" value="{{$usuario->telefono}}" placeholder="">
                                  {{ ($errors->has('telefono')) ? $errors->first('telefono') : '' }}
                              </div>
                          </div>



                    <div class="form-group">
                              <label for="rol" class="col-md-4 control-label">Rol</label>

                              <div class="col-md-6">
                                  <input class="form-control" type="text" name="rol" value="{{$usuario->rol}}" placeholder="">
                                  {{ ($errors->has('rol')) ? $errors->first('rol') : '' }}
                              </div>
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

