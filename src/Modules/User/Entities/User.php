<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\User\Database\factories\UserFactory::new();
    // }
}
