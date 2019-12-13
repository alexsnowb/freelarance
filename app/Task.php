<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    const STATUS_NEW = 'new';
    const STATUS_CLOSED = 'closed';
    const STATUS_PROGRESS = 'progress';
    const STATUS_COMPLETE = 'complete';

    protected $fillable = [
        'title', 'description', 'status'
    ];


    /**
     * Get the owning model.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'ownerId', 'id');
    }
}
