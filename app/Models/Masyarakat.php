<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id_15480'];
    protected $primaryKey = 'id_15480';
    protected $table = 'masyarakats_15480';

    public function getAuthPassword()
    {
        return $this->password_15480;
    }
}
