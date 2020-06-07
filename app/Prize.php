<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prizes';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'code',
        'price',
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'prize_user');
    }
}
