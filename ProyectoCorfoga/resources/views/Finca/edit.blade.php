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
                <div class="panel-heading">Editando Fincas</div>

                 <div class="panel-body">

                      <form class="" action="/finca/{{ $finca->id}}" method="post">
                      
                     <div class="form-group">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="nombre" value="{{$finca->nombre}}" placeholder="">
                                {{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}
                            </div>
                        </div>



                          <div class="form-group">
                              <label for="region" class="col-md-4 control-label">Region</label>
                              <select class="form-control" id="region1" class="col-md-4 control-label" name="region">
                                <option>Region Central</option>
                                <option>Region Chorotega</option>
                                <option>Region Brunca</option>
                                <option>Region Pacifico Central</option>
                                <option>Region Huetar Norte</option>
                                <option>Region Huetar Atlantico</option>
                              </select>
                        </div>


                         <div class="form-group">
                              <label for="propietario">Propietario </label>
                              <select class="form-control" id="propietario_id" name="propietario_id">
                                @foreach ($propietario as $propietario)
                                   <option>
                                        {{$propietario->id}}
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








