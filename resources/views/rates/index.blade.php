@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
<a href="{{ route('rate.create') }}" class="btn btn-info active border-actions" role="button" aria-pressed="true">Nueva Tarifa</a>
<div class="container">
   <h2>Tabla de Tarifas</h2>
   <table class="table table-hover">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Tarifa</th>
         </tr>
      </thead>
   </table>
</div>
@endsection