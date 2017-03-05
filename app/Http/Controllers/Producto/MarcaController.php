<?php

namespace App\Http\Controllers\Producto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MarcaController extends Controller
{

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }
  public function index()
  {
      $marks = \App\Models\Product\Mark::all();
      return View('marks/vmarks')->with('marks',$marks);
  }


  public function insertform(){
      $mark = new \App\Models\Product\Mark;
      return view('marks/mark_create')->with('mark',$mark);
    }

    public function insert(Request $request){
        $mark = new \App\Models\Product\Mark;
        $mark->name = $request->input('name');
      if( $mark->save() ){
        return redirect()->action('Producto\MarcaController@index');
      }else{
        return view('marks/mark_create')->with('marks',$mark);
      }
 }


 public function editform($id){
     $mark = \App\Models\Product\Mark::find($id);
     if(!$mark) die("not found: ".var_dump($id));
     return view('marks/edit_mark')->with('mark',$mark);
   }

   public function edit(Request $request, $id){
     $mark = \App\Models\Product\Mark::find($id);
     if(!$mark) die("not found: ".var_dump($id));
       $mark->name = $request->input('name');
     if( $mark->save() ){
       return redirect()->action('Producto\MarcaController@index');
     }else{
       return view('marks/edit_mark')->with('marks',$mark);
     }
}

  public function delete($id){
    $mark = \App\Models\Product\Mark::find($id);
    if(!$mark) die("not found: ".$id);
    if( $mark->delete()){
      return redirect()->action('Producto\MarcaController@index');
    }else{
      return die("error no se pudo borrar: ".$id);
    }
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
