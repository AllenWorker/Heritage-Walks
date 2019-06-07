<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function stops(){
    //    return $this->hasMany('App\Stop', 'trail_stop');
       return $this->belongsTo('App\Stop', 'trail_stop');
}
}