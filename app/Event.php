<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'tb_data_event';
    protected $fillable = [
        'nama_event',
        'email',
        'surat_pengantar',
        'proposal_acara',
        'proposal_keramaian',
        'deskripsi_event',
        'mulai_acara',
        'akhir_acara',
        'lokasi'
    ];
}
