<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->activation_token = Str::random(10);
        });
    }


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 模型关联
    public function statuses()
    {
        return $this->hasMany(Status::class);
    }

    public function feed()
    {
        return $this->statuses()
                    ->orderBy('created_at', 'desc');
    }
}
