<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    //
    protected $primeryKey = 'id';
    protected $table = 'pembelian';
    protected $fillable= ['item_name','item_qty','item_price'];
}
