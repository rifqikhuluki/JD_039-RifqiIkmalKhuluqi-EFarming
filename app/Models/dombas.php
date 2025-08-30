<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dombas extends Model
{
    use HasFactory;
    
    protected $table = 'dombas';

    protected $primaryKey = 'id_domba';

    protected $fillable = [
        'rfid_tag',
        'nama_domba',
        'jenis_kelamin',
        'tanggal_lahir',
        'ras',
        'status'
    ];

        public function berat()
    {
        return $this->hasMany(berat::class, 'id_domba', 'id_domba');
    }
}

