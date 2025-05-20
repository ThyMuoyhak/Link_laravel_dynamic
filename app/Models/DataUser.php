<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable; // Add this
use Illuminate\Database\Eloquent\SoftDeletes;

class DataUser extends Authenticatable
{
    use Notifiable, SoftDeletes; // Add Notifiable trait

    protected $table = 'data_users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'bio',
        'profile_picture',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'id_user');
    }
}