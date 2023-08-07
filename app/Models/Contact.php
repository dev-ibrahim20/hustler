<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Contact extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'contacts';
    protected $fillable = ['name', 'last_name', 'email', 'web_site', 'message', 'updated_at', 'created_at'];
    protected $hidden = ['create_at', 'update_at'];
}
