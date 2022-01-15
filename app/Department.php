<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'id','user_id', 'name', 'description'
    ];

   
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
