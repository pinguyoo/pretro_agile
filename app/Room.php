<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'owner',
        'group_list',
        'start_time',
        'pincode'
    ];

    /**
     * declare the relationship between Room and User
     */
    public function room() {
        return $this->belongsTo(User::class);
    }
}
