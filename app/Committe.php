<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committe extends Model
{
    protected $fillable = [
        'comite'
    ];

    public function documents(){
        return $this->hasMany(Document::class);
    }
}
