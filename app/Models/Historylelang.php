<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historylelang extends Model
{
    use HasFactory;

    protected $guarded = ['id_15480'];
    protected $table = 'history_lelangs_15480';

    public function user()
    {
        return $this->hasOne(Masyarakat::class, 'id_15480', 'id_masyarakat_15480');
    }
}
