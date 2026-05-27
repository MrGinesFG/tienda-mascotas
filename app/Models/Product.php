<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 // Representa la tabla 'products'
  protected $fillable = ['name', 'price'];
}
