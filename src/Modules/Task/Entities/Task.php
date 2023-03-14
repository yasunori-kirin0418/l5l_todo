<?php

namespace Modules\Task\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $attributes = [
        // src/Modules/Module/Database/Seeders/ModuleTableSeeder.php
        // タスクモジュールのデフォルトID
        'id' => 1
    ];

    protected $fillable = [
        'title',
        'description',
        'deadline',
    ];
}
