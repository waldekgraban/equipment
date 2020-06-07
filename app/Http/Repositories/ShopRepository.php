<?php

namespace App\Http\Repositories;

use App\Box;
use App\Prize;
use App\Rune;
use App\User;

class ShopRepository extends Repository
{
    public function getBoxes()
    {
        return Box::all();
    }

    public function getRunes()
    {
        return Rune::all();
    }

    public function getPrizes()
    {
        return Prize::all();
    }

    public function buyBox($itemId, $userId)
    {

        $user = User::find($userId);
        $box  = Box::find($itemId);

        if ($this->enoughCoins($user->wallet->coins, $box->price)) {
            $currentCoins = $this->pay($user->wallet->coins, $box->price);
            $user->boxes()->attach($box->id);
            $user->wallet()->update([
                'coins' => $currentCoins,
            ]);

            return 'Kupiono ' . $box->name;
        } else {
            return 'Za drogie';
        }
    }

    public function buyPrize($itemId, $userId)
    {

        $user  = User::find($userId);
        $prize = Prize::find($itemId);

        if ($this->enoughCoins($user->wallet->coins, $prize->price)) {
            $currentCoins = $this->pay($user->wallet->coins, $prize->price);
            $user->prizes()->attach($prize->id);
            $user->wallet()->update([
                'coins' => $currentCoins,
            ]);

            return 'Kupiono ' . $prize->name;
        } else {
            return 'Za drogie';
        }
    }

    public function buyRune($itemId, $userId)
    {

        $user = User::find($userId);
        $rune = Rune::find($itemId);

        $currentCoins = $this->getBonus($user->wallet->coins, $rune->bonus);
        $user->runes()->attach($rune->id);
        $user->wallet()->update([
            'coins' => $currentCoins,
        ]);

        return 'Kupiono ' . $rune->name;
    }

    public function enoughCoins($userCoins, $itemPrice)
    {
        if ($userCoins >= $itemPrice) {
            return true;
        }

        return false;
    }

    public function pay($userCoins, $itemPrice)
    {
        return $userCoins - $itemPrice;
    }

    public function getBonus($userCoins, $itemPrice)
    {
        return $userCoins + $itemPrice;
    }
}
