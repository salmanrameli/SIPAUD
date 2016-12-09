<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'password', 'nama', 'alamat', 'jenis_kelamin', 'telepon', 'tanggal_lahir', 'email', 'tahun_masuk', 'jabatan'
    ];

    public function getid()
    {
        return $this->id;
    }

    public function pelajaran()
    {
        return $this->hasMany('App\pelajaran', 'id_guru', 'id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
