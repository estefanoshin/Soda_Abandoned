@extends('layouts.app')

{{ Html::script( 'js/previewImage.js' ) }}

@section('content')
<form id="formProduct" method="POST" enctype="multipart/form-data" action="{{ route('products') }}">
	@csrf
	<div class="row">
		<div class="col">
			<input class="form-control btn btn-outline-secondary" type="text" name="articulo" placeholder="Ingrese un Articulo" required>
			<input class="form-control btn btn-outline-secondary" type="text" name="descripcion" placeholder="Ingrese detalle del articulo" required>
			<input class="form-control btn btn-outline-secondary" type="text" name="talles" placeholder="Ingrese Talles" required>
		</div>
		<div class="col">
			<input class="form-control btn btn-outline-secondary" type="text" name="tipo_tela" placeholder="Ingrese un Tipo de Tela" required>
			<input class="form-control btn btn-outline-secondary" type="text" name="colores" placeholder="Ingrese Colores" required>
			<input class="form-control btn btn-outline-secondary" type="text" name="precio" placeholder="Ingrese Precio">
		</div>
	</div>

  <img id="output" >
  <input class="form-control btn btn-outline-secondary w-50 p-1" type="file" accept="image/*" name="img" onchange="loadFile(event)">

	<button class="btn btn-outline-success fixed-bottom-right" type="submit">Agregar</button>
</form>
@endsection