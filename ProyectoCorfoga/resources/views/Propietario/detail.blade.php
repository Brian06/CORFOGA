@extends('welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detalle del propietario</div>

                 <div class="panel-body">

					  <p>Identificador: {{ $propietario->id }}</p>
					  <p>Nombre de Propietario: {{ $usuario->nombre }}</p>
					  <p>Cedula: {{ $propietario->usuario_cedula }}</p>

		    	</div>
		    </div>
		</div>
	</div>
</div>
@endsection 