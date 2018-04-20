@extends('layouts.app')

{{ Html::script( 'js/previewImage.js' ) }}

@section('content')

@foreach($datos as $dato)
<form id="formProduct" method="POST" enctype="multipart/form-data" action="{{ route('update') }}">
	@csrf
	<div class="row">
		<div class="col">
			<input
				class="form-control btn btn-outline-secondary"
				type="text"
				name="articulo"
				placeholder="Ingrese un Articulo"
				value="{{ $dato->articulo }}"
				required>

			<input
				class="form-control btn btn-outline-secondary"
				type="text"
				name="descripcion"
				placeholder="Ingrese detalle del articulo"
				value="{{ $dato->descripcion }}"
				required>

			<input
				class="form-control btn btn-outline-secondary"
				type="text"
				name="talles"
				placeholder="Ingrese Talles"
				value="{{ $dato->talles }}"
				required>
		</div>

		<div class="col">
			<input
				class="form-control btn btn-outline-secondary"
				type="text"
				name="tipo_tela"
				placeholder="Ingrese un Tipo de Tela"
				value="{{ $dato->tipo_tela }}"
				required>

			<input
				class="form-control btn btn-outline-secondary"
				type="text"
				name="colores"
				placeholder="Ingrese Colores"
				value="{{ $dato->colores }}"
				required>
			<input
				class="form-control btn btn-outline-secondary"
				type="text"
				name="precio"
				placeholder="Ingrese Precio"
				value="{{ $dato->precio }}">
		</div>

		<input type="text" name="id_art" value="{{ $dato->id_art }}" hidden>
		<input type="text" name="prev_img" value="{{ $dato->img }}" hidden>
	</div>

  <img id="output" >
  <input
	  class="form-control btn btn-outline-secondary w-50 p-1"
	  type="file"
	  accept="image/*"
	  name="img"
	  onchange="loadFile(event)">

	<button class="btn btn-outline-success fixed-bottom-right" type="submit">Modificar</button>
</form>
@endforeach

@endsection