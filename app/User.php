<?php

namespace App;

use App\Box;
use App\Prize;
use App\Rune;
use App\Wallet;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function boxes()
    {
        return $this->belongsToMany(Box::class, 'box_user');
    }

    public function runes()
    {
        return $this->belongsToMany(Rune::class, 'rune_user');
    }

    public function prizes()
    {
        return $this->belongsToMany(Prize::class, 'prize_user');
    }
}
