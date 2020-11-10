<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListEvent extends Model
{
    protected $table = 'list_event';
    protected $fillable = [
        'nama_event',
        'mulai_acara',
        'akhir_acara',
        'lokasi',
        'status'
    ];
}
