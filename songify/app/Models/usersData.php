<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersData extends Model
{
    use HasFactory;

    protected $table= "users_data";
    protected $primary_key = 'userid';
}
