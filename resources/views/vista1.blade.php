@extends('layouts.vistapadre')
@section('contenidoPrincipal')
<h2>vista 1</h2>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    @php
        echo 'esto es una prueba de php';
    @endphp
    <ul>
    @for($i =0;$i < 10;$i++)
        <li>el valor de i es : {{$i}}</li>
    @endfor
    </ul>

    <ul>
    @foreach
    @endforeach
    </ul>
@endsection
