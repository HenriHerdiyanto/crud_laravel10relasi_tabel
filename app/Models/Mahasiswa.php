<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas'; //mendefinisikan nama tabel yang digunakan untuk model mahasiswa
    protected $fillable = [
        'nama',
        'nim', //membuat fillable untuk menentukan atribut yang dapat diisi oleh user
        'kelas',
        'jurusan',
        'no_handphone',
        'email',
        'tanggal_lahir',
        'gambar',
    ];
    // relasi dengan tabel nilai
    public function nilais()
    {
        return $this->hasMany(Nilai::class, 'id');
    }
    // public static function getMahasiswa($nim)
    // {
    //     $mahasiswa = Mahasiswa::where('nim', $nim)->first();
    //     return $mahasiswa;
    // }
}
