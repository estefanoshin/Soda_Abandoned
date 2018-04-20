@extends('layouts.app')
@section('content')
        <div class="position-ref">
            <div id="welcome" class="content">
                    <h1 class="title">Soda</h1>
                    <h2 class="subtitle">Casual Fashion</h2>

<footer id="footer" class="navbar navbar-expand-md bg-dark navbar-laravel">
                @if (Route::has('login'))
                <div class="links">
                    @auth
                    <a href="{{ url('/formProduct') }}">Nuevo Articulo</a>
                    @else

                    @endauth
                @endif
                    <a href="{{ url('/info') }}">Información</a>
                </div>
</footer>
            </div>
        </div>
        @include('lists.products')
@endsection