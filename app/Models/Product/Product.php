<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table= 'products';
  protected $primarykey= 'id';
  protected $fillable=[
    'id','modelo','mark','color','precio','numpuertas','mark_id'
  ];

  public function markn()
  {
    //hasmany tiene una o muchas marcas
    return $this->belongsto('App\Models\Product\Mark', 'mark_id');
  }
}
