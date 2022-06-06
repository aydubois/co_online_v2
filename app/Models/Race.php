<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;


        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'updated_at',
        'created_at',
    ];

    /**
     * @return IlluminateDatabaseEloquentRelationsBelongsToMany
     */
    public function characteristics(){
        return $this->belongsToMany(Characteristic::class)->withPivot('value', 'mod');
    }
}
