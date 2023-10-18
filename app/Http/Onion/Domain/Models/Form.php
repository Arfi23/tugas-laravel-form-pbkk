<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App_User extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'pekerjaan'
    ];

    protected $table = 'app_users'; 
}