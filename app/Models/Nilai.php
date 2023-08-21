<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilais';
    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'kelas_id',
        'nilai',
    ];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'siswa_id');
    }
    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'mapel_id');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
