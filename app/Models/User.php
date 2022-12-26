<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    
    protected function name(): Attribute{
        return new Attribute(
            /*get:function($value){ // accesor que convierte el nombre de usuario antes de mostrarlo en pantalla
                return ucwords($value); // ucwords -> uppercase
            },

            set:function($value){ // mutador que convierte el nombre de usuario a minísculas antes de registrarlo en la BD
                return strtolower($value);
            }*/

            /* el get y set anterior pero en función flechas */
            get:fn($value) => ucwords($value),
            set:fn($value) => strtolower($value),
        );
    }
}
