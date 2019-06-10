<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Trail extends Model
{
    /**
     * List of columns from the database the user shouldn't be able to change
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * many to many relationship
     * Shows that trails can have many stops
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function stops(){
     //  return $this->hasMany('App\Stop', 'trail_stop');
       return $this->belongsToMany(Stop::class, 'trail_stop');
    }
}