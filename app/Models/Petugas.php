<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// class Petugas extends Model
class Petugas extends Authenticatable
{
    // use HasFactory;
    use Notifiable;

    protected $guarded = ['id_15480'];
    protected $table = 'petugas_15480';
    protected $primaryKey = "id_15480";

    public function getAuthPassword()
    {
        return $this->password_15480;
    }
    public function level()
    {
        return $this->hasOne(Level::class, 'id_level_15480', 'id_level_15480');
    }
    public function lelang()
    {
        return $this->hasMany(Lelang::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];
}
