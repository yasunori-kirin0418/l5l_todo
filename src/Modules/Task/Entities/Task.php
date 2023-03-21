<?php

namespace Modules\Task\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\Entities\User;
use Modules\Task\Database\factories\TaskFactory;
use Modules\Task\Entities\Status;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $attributes = [
        // src/Modules/Core/Database/Seeders/ModuleTableSeeder.php
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

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
