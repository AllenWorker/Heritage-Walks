<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
class TrailStop extends Pivot
{
    /*protected $table = 'trail_stop';
    public $incrementing = true;

    public function trail(){
        return $this->belongsTo(Trail::class);
    }

    public function stop(){
        return $this->belongsTo(Stop::class);
    }*/
}