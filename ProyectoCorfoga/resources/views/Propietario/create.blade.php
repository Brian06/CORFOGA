@extends('welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-heading">Agregar Propietario</div>
                <div class="panel-body">
                   
                        <form class="form-horizontal" role="form" action="/propietario" method="post">

                        

                        <div class="form-group">
                            <label for="id" class="col-md-4 control-label">id</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="id" value="" placeholder="">
                                {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                            </div>
                        </div>

                         <div class="form-group">
                              <label for="propietario_cedula">N° Cedula del Propietario</label>
                              <select class="form-control" id="propietario_cedula"  name="propietario_cedula">
                                @foreach ($propietario as $propietario)
                                   <option>
                                        {{$propietario->id}}
                                   </option>
                                
                                @endforeach
                              </select>
                        </div>

        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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