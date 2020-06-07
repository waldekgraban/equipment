<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rune extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'runes';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'bonus',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'rune_user');
    }
}
