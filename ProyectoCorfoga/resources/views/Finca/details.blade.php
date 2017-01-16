@extends('welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detalle de la finca</div>

                 <div class="panel-body">

					  <p>Id: {{ $finca->id }}</p>

					  <p>Nombre: {{ $finca->nombre }}</p>


					  <p>Región: {{ $finca->region }}</p>

					  <p>Id Propietario: {{ $finca-> propietario_id}}</p>

					   <p> Ced. Propietario: {{ $propietario-> usuario_cedula}}</p>

		    	</div>
		    </div>
		</div>
	</div>
</div>
@endsection 