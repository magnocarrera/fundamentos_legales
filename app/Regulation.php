<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    protected $fillable = [
        'name'
    ];

    public function legaldocuments(){
        return $this->hasMany(LegalDocument::class);
    }
}
