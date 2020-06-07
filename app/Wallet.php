<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wallets';

    public $timestamps = false;

    protected $fillable = ['coins'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
