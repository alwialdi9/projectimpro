<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'tb_users';
    protected $fillable = [
        'nama', 'email', 'nomor_hp', 'password', 'google_id', 'facebook_id'
    ];
}
