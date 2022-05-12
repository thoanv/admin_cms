<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'employees';

    protected $guarded = 'admin';

    protected $fillable = [
        'name', 'username', 'avatar', 'is_admin', 'status', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
