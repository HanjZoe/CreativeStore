<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;
    use HasApiTokens, HasFactory, Notifiable;

    static function getGender(){
        return [
          self::GENDER_MALE => 'мужской',
          self::GENDER_FEMALE => 'женский'
        ];
    }

    public function getGenderTitleAttribute(){
        return self::getGender()[$this->gender];
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

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
}
