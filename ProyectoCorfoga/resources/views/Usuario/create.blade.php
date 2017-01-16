@extends('welcome')

@section('content')

<div class="container">

    <h5>Registro de Usuarios</h5>
    <br>
            <div class="row">
                <div class="col-md-8 col-md-offset-0">
                    <div class="panel panel-default">

                        <div class="panel-body">
                           
                            <form class="form-horizontal" role="form" action="/usuario" method="post">

                                

                                <div class="form-group">
                                    <label for="nombre" class="col-md-2 control-label">Nombre</label>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre Completo">
                                        {{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="email" class="col-md-2 control-label">Correo electonico</label>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="email" value="" placeholder="correo electronico">
                                        {{ ($errors->has('email')) ? $errors->first('email') : '' }}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="id" class="col-md-2 control-label">Identidicador</label>

                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="id" value="" placeholder="identificador">
                                        {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="telefono" class="col-md-2 control-label">Telefono</label>

                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="telefono" value="" placeholder="Formato sin guíon">
                                        {{ ($errors->has('telefono')) ? $errors->first('telefono') : '' }}
                                    </div>
                                </div>


                                <div class="form-group">
                                      <label for="rol" class="col-md-2 control-label">Rol</label>
                                      <div class="col-md-4">
                                          <select class="form-control" id="rol" control-label" name="rol">
                                            <option>admin</option>
                                            <option>ganadero</option>
                                            <option>inspector</option>
                                          </select>
                                       </div>
                                </div>

                                
                                <br>
                                <div class="form-group">
                                    <div class="col-md-2 col-md-offset-3">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input class="btn btn-primary btn-block" type="submit" name="name" value="Crear">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>

@endsection