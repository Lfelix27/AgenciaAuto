@extends('layouts.master')

@section('title','Producto Nuevo')

@section('content')

<html>

   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Marca</td>
               <td>
                 <select class="" name="mark_id">
                   @foreach ($marks as $mark)
                     <option value="<?= $mark->id ?>"><?= $mark->name ?></option>
                   @endforeach
                 </select>
                 <input type='hidden' name='mark' value="1" />
               </td>
               </tr>
               <tr>
                 <td>Modelo</td>
                 <td><input type='text' name='modelo' /><?= $product->modelo ?></td>
               </tr>
              <tr>
                <td>Color</td>
                <td><input type='text' name='color' /><?= $product->color ?></td>
              </tr>
               <tr>
                 <td>Costo</td>
                <td><input type='text' name='precio' /><?= $product->precio ?></td>
               </tr>
               <tr>
                 <td>Numero Puertas</td>
                <td><input type='text' name='numpuertas' /><?= $product->numpuertas ?></td>
               </tr>

            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Auto"/>
               </td>
            </tr>
         </table>



      </form>

   </body>
</html>
@endsection
