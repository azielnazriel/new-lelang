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

    public function user()
    {
        return $this->belongsTo(Masyarakat::class);
    }

    public function historyLelang()
    {
        return $this->hasMany(Historylelang::class, 'id_lelang_15480', 'id_15480');
    }

    public function getMinBid()
    {
        $history = Historylelang::where('id_lelang_15480', $this->id_15480)->orderBy('penawaran_harga_15480', 'desc')->first();

        if ($history == null) {
            $lelang = Lelang::where('id_15480', $this->id_15480)->firstOrFail();
            $minBid = $lelang->barang->harga_awal_15480;
        } else {
            $minBid = $history->penawaran_harga_15480;
        }

        return $minBid;
    }
}
