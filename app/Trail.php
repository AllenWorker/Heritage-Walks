<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function stops(){
        return $this->hasMany(Stop::class);
    }
}