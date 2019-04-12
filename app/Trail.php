<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    public function stops(){
        return $this->hasMany(Stop::class);
    }
}