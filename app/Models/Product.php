<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $table = 'products';
    protected $fillable = ['name', 'disc', 'price', 'image', 'size', 'color', 'drive_cost', 'create_at', 'update_at'];
    protected $hidden = ['create_at', 'update_at'];
}
