<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'boxes';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'price',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'box_user');
    }
}
