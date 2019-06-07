<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function trails() {
        return $this->belongsToMany('App\Trail', 'trail_stop');
//        return $this->belongsToMany(Trail::class, 'trail_stop')->withTimestamps;
    }
}