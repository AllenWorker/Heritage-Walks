<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    public function trail() {
        return $this->belongsToMany(Trail::class);
    }
}