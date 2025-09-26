<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    use Notifiable;

    protected $table = 'users';   // Table ka naam
    protected $primaryKey = 'user_id'; // Primary key column ka naam
    public $incrementing = true;  // Auto increment enable
    protected $keyType = 'int';   // Primary key ka type

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role',
        'face_image',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    

    public $timestamps = false;
}
