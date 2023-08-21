<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosens';
    protected $fillable = [
        'nama',
        'nidn',
        'email',
        'jabatan',
        'prodi',
        'no_hp',
        'foto',
    ];
    // relaso dengan tabel nilais
    public function nilais()
    {
        return $this->hasMany(Nilai::class, 'nidn');
    }
    // public static function boot(){
    //     parent::boot();
    //     static::deleting(function($dosen){
    //         $dosen->mahasiswa()->delete();
    //     });
    // }
}
