<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    protected $table = 'kupon';
    protected $fillable= ['name_cupon','description','discount_harga'];
}
