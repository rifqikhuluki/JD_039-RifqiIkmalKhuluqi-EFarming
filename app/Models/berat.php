<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class berat extends Model
{
    protected $table = 'berat';
    
    protected $primaryKey = 'id_berat';

    protected $fillable = [
        'id_domba',
        'rfid_tag',
        'tanggal_timbang',
        'berat_domba'
    ];
}
