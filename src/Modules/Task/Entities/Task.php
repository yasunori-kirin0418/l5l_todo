<?php

namespace Modules\Task\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Task\Database\factories\TaskFactory;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $attributes = [
        // src/Modules/Module/Database/Seeders/ModuleTableSeeder.php
        // タスクモジュールのデフォルトID
        'module_id' => 1
    ];

    protected $fillable = [
        'status_id',
        'user_id',
        'title',
        'description',
        'deadline',
    ];

    protected static function newFactory()
    {
        return TaskFactory::new();
    }
}
