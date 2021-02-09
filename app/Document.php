<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'committe_id','nro_norma','ano','descripcion','cod_norma','type','file'
    ];

    public function committe()
    {
        return $this->belongsTo(Committe::class);
    }
}
