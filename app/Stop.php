<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Stop extends Model
{
    /**
     * List of columns from the database the user shouldn't be able to change
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * many to many relationship
     * Shows that stops can have many trails
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function trails() {
        return $this->belongsToMany(Trail::class, 'trail_stop');
//        return $this->belongsToMany(Trail::class, 'trail_stop')->withTimestamps;
    }
}