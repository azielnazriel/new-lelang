<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'levels_15480';
    protected $primaryKey = 'id_level_15480';

    public function petugas()
    {
        return $this->hasMany(Petugas::class);
    }
}
