<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = ['name', 'image', 'size', 'color', 'quantity', 'total', 'username', 'phone', 'email', 'address', 'state', 'ip', 'create_at', 'update_at'];
    protected $hidden = ['create_at', 'update_at'];
}
