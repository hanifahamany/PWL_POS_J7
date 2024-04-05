<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $fillable = ['username', 'level_id', 'nama', 'password']; // Tambahkan 'username' ke dalam fillable

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
