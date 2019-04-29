<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function trail() {
        return $this->belongsToMany(Trail::class);
    }
}