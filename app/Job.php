<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = [
        'user_id', 'department_id', 'name', 'description'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function getGetExcerptAttribute($key)
    {
        return substr($this->description, 0, 40) . '...';
    }
}
