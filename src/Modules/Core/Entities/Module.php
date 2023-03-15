<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Database\factories\ModuleFactory;
use Modules\Core\Entities\User;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
    
    protected static function newFactory()
    {
        return ModuleFactory::new();
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
