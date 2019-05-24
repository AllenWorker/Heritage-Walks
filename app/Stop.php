<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Stop extends Pivot
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function trails() {
        return $this->belongsToMany(Trail::class, 'trail_stop');
//        return $this->belongsToMany(Trail::class, 'trail_stop')->withTimestamps;
    }
}