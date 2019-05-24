<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Trail extends Pivot
{
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function stops(){
    //    return $this->hasMany('App\Stop', 'trail_stop');
       return $this->belongsToMany(Stop::class, 'trail_stop');
    }
}