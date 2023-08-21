<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = 'matkuls';
    protected $fillable = [
        'kode_matkul',
        'nama_matkul',
        'sks',
        'semester',
        'dosen_id',
    ];
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    // relasi dengan tabel nilai
    public function nilais()
    {
        return $this->hasMany(Nilai::class, 'id');
    }
}
