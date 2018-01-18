<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function getRandomUser($users)
    {
        $tamaño=count($users);
        $random=rand(0,$tamaño-1);
        $cont=0;
        foreach ($users as $user) {
            # code...
            if ($cont==$random) {
                return $user;
            }
            $cont++;
        }
    }
}
