<?php

namespace Modules\Task\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Task\Entities\Task;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
