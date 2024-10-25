<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'npm',
        'kelas_id',
        'jurusan_id',
        'foto',
    ];

    public function getUser($id = null)
    {
        // Use Eloquent relationships instead of raw joins
        if ($id != null) {
            return $this->with(['kelas', 'jurusan'])
                ->where('id', $id)
                ->first();
        }
        
        return $this->with(['kelas', 'jurusan'])->get();
    } 

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}
