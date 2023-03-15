<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'lelangs_15480';

    public function barang()
    {
        return $this->hasOne(Barang::class, 'id_15480', 'id_barang_15480');
    }
}
