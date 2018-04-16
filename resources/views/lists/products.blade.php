<table border="1" id="products">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Articulo</th>
            <th>Tela</th>
            <th>Color</th>
            <th>Talle</th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $productos as $producto )
        <tr>
            @if (Storage::disk('local')->has($producto->img))
            <td><img class="img-fluid" src="{{ route('image', ['filename' => $producto->img]) }}"></td>
            @endif
            <td>{{ $producto->articulo }}</td>
            <td>{{ $producto->tipo_tela }}</td>
            <td>{{ $producto->colores }}</td>
            <td>{{ $producto->talles }}</td>
        </tr>
        @endforeach
    </tbody>
</table>