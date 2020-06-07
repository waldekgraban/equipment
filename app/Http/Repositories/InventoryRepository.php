<?php

namespace App\Http\Repositories;

use App\User;

class InventoryRepository extends Repository
{
    public function getInventory($userId)
    {
        $user = User::find($userId);

        $boxes  = $user->boxes;
        $runes  = $user->runes;
        $prizes = $user->prizes;

        $inventory = [
            'boxes'  => $boxes,
            'runes'  => $runes,
            'prizes' => $prizes,
        ];

        return $inventory;
    }
}
