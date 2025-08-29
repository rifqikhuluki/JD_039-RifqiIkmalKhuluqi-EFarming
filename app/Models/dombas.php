<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dombas extends Model
{
    protected $table = 'dombas';

    protected $primaryKey = 'id_domba';

    protected $fillable = [
        'rfid_tag',
        'nama_domba',
        'jenis_kelamin',
        'tanggal_lahir',
        'id_induk',
        'status'
    ];
}

