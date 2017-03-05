@extends('layouts.master')

@section('title','Producto Nuevo')

@section('content')

<html>

   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
      <form action = "/editmarca/<?= $mark->id ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Marca</td>
               <td>
                 <input type='text' name='name' value="<?= $mark->name ?>" />
               </td>
               </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Edit Marca"/>
               </td>
            </tr>
         </table>

      </form>

   </body>
</html>
@endsection
