@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
<a href="{{ route('user.create') }}" class="btn btn-info active border-actions" role="button" aria-pressed="true">Nuevo Usuario</a>
<div class="container">
   <h2>Tabla de Usuarios</h2>
   <p>Usuarios del Día</p>
   <table class="table table-hover">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Tipo</th>
            <th scope="col">Marca</th>
            <th scope="col">Placa</th>
            <th scope="col">Fecha</th>
         </tr>
      </thead>
   </table>
</div>
@endsection