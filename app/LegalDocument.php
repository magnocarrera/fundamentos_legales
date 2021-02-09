<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalDocument extends Model
{
    protected $fillable = [
        'regulation_id','nro_norma','ano','decreto','descripcion', 'file',
    ];

    public function regulation()
    {
        return $this->belongsTo(Regulation::class);
    }
}
