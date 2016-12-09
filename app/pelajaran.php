<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    protected $table = 'pelajaran';

    protected $fillable = [
        'id', 'id_guru', 'nama'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_guru', 'id');
    }

}
