<?php

namespace App\Models;



use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Promoteur extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded=[];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guard = 'promoteur';
}
