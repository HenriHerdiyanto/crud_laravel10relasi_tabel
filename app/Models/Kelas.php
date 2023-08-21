<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [
        'kode_kelas',
        'nama_kelas',
    ];
    // relasi dengan tabel nilais
    public function nilais()
    {
        return $this->hasMany(Nilai::class, 'id');
    }
}
