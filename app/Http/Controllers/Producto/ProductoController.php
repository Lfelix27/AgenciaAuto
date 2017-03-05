<?php

namespace App\Http\Controllers\Producto;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $product = \App\Models\Product\Product::all();
      return View('product/product')->with('product',$product);
  }

  public function insertform(){
      $product = new \App\Models\Product\Product();
      $marks = \App\Models\Product\Mark::all();
      return view('product/stud_create')->with('product',$product)->with('marks',$marks);
    }

    public function insert(Request $request){
      $product = new \App\Models\Product\Product();
      $product->mark = $request->input('mark');
      $product->mark_id = $request->input('mark_id');
      $product->modelo = $request->input('modelo');
      $product->color = $request->input('color');
      $product->precio = $request->input('precio');
      $product->numpuertas = $request->input('numpuertas');
      if( $product->save() ){
        return redirect()->action('Producto\ProductoController@index');
      }else{
        $marks = \App\Models\Product\Mark::all();
        return view('product/stud_create')->with('product',$product)->with('marks',$marks);
      }

 }

 public function editform($id){
     $product = \App\Models\Product\product::find($id);
     $marks = \App\Models\Product\Mark::all();
     if(!$product) die("not found: ".var_dump($id));
     return view('product/edit_product')->with('product',$product)->with('marks',$marks);
   }

   public function edit(Request $request, $id){
     $product = \App\Models\Product\product::find($id);
     if(!$product) die("not found: ".var_dump($id));
       $product->mark = $request->input('mark');
       $product->modelo = $request->input('modelo');
       $product->color = $request->input('costo');
       $product->precio = $request->input('precio');
       $product->numpuertas = $request->input('numpuertas');
     if( $product->save() ){
       return redirect()->action('Producto\ProductoController@index');
     }else{
       $marks = \App\Models\Product\Mark::all();
       return view('product/edit_product')->with('product',$product)->with('marks',$marks);
     }
}

public function delete($id){
  $product = \App\Models\Product\product::find($id);
  if(!$product) die("not found: ".$id);
  if( $product->delete()){
    return redirect()->action('Producto\ProductoController@index');
  }else{
    return die("error no se pudo borrar: ".$id);
  }
}

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
