@extends('layouts.master')

@section('title','Lista de Productos')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header">
     <h1>Productos <small>Actualizados hasta hoy</small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Lista
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <a href="/insert" type="button" class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</a>
             </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>

                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Color</th>
                  <th>Precio</th>
                  <th>Numero Puertas</th>
                  <th>Accion</th>
               </thead>
               <tbody>

                  @foreach($product as $prod)
                    <tr>
                       <td>{{($prod->markn)?$prod->markn->name:"n/a"}}</td>
                       <td>{{$prod->modelo}}</td>
                       <td>{{$prod->color}}</td>
                       <td>{{$prod->precio}}</td>
                       <td>{{$prod->numpuertas}}</td>
                       <td><a href="editproduct/{{$prod->id}}">[Editar]</a> <a href="deleteproduct/{{$prod->id}}">[Eliminar]</a></td>
                    </tr>

                    @endforeach

               </tbody>


             </table>


          </div>
        </div>


     </div>
   </div>


@endsection
