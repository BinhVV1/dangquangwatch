<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table='product';
   protected $fillable=['id','category','link','name','subtitle','description','tags','images_main','images','created_at'];
}
