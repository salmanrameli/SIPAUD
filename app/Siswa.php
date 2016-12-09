<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nomor_induk', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'angkatan',
        'nama_ayah', 'pekerjaan_ayah', 'no_telp_ayah',
        'nama_ibu', 'pekerjaan_ibu', 'no_telp_ibu'
    ];

    public function nilai_siswa()
    {
        return $this->hasMany('App\nilai_siswa');
    }
}
