<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDetail extends Model
{
    protected $table = 'itemdetails';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id','item_name','price','quantity'];
    use HasFactory;
}
