<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemenang extends Model
{
    use HasFactory;

    protected $guarded = ['id_15480'];
    protected $table = 'pemenang_15480';

    public function historyLelang()
    {
        return $this->hasOne(HistoryLelang::class, 'id_history_lelang_15480', 'id_15458');
    }
}
