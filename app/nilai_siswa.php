<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai_siswa extends Model
{
    protected $table = 'nilai_siswa';

    protected $fillable = ['id', 'id_guru', 'nomor_induk', 'nilai'];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }
}
