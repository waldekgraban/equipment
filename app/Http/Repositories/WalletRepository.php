<?php

namespace App\Http\Repositories;

use App\User;
use App\Wallet;

class WalletRepository extends Repository
{
    public function store($userId, $coins)
    {
        $user = User::find($userId);

        $wallet        = new Wallet();
        $wallet->coins = $coins;

        $user->wallet()->save($wallet);
    }

    public function getCoin($userId)
    {
        $user = User::find($userId);

        return $user->wallet->coins;
    }
}
