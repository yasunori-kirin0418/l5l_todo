<?php

namespace Modules\Task\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Task\Database\factories\TaskFactory;
use Modules\Task\Entities\Status;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

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

    /**
     * statusesテーブルとのリレーション
     *
     * @return Status
     **/
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * usersテーブルとのリレーション
     *
     * @return User
     **/
    public function user()
    {
        return $this->belongsTo(\Modules\Core\Entities\User::class);
    }

    /**
     * ステータス名を取得する
     *
     * @return string
     **/
    public function getStatusNameAttribute()
    {
        return $this->status->name;
    }

    /**
     * モジュールIDを取得
     *
     * protected $attributesにセットしたモジュールIDを取得する良い方法を知りたい…
     *
     * @return int
     **/
    public static function moduleId()
    {
        return 1;
    }
}
