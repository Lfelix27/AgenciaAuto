@extends('layouts.master')

@section('title','Lista de Productos')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header">
     <h1>Marcas<small>Actualizadas hasta hoy</small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Lista
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <a href="/insertmarca" type="button" class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</a>
             </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>

                  <th>Clave</th>
                  <th>Marca</th>
                  <th>Accion</th>
               </thead>
               <tbody>
                 @foreach($marks as $mark)


                    <tr>
                       <td>{{$mark->id}}</td>
                       <td>{{$mark->name}}</td>

                       <td><a href="/editmarca/{{$mark->id}}">[Editar]</a> <a href="/deletemarca/{{$mark->id}}">[Eliminar]</a></td>
                    </tr>

                    @endforeach

               </tbody>


             </table>


          </div>
        </div>


     </div>
   </div>


@endsection
