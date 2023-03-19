<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\Database\factories\UserFactory;
use Modules\Core\Entities\Module;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    
    protected static function newFactory()
    {
        return UserFactory::new();
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class)
            ->wherePivot('enable', true);
    }
}
