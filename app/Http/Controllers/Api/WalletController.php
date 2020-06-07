<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Repositories\WalletRepository;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function __construct(WalletRepository $repository)
    {
        $this->repository = $repository;
    }

    public function addCoinsToStart(Request $request)
    {
        $coins   = $request->input('coins');
        $user_id = $request->input('user_id');

        $this->repository->store($user_id, $coins);
    }

    public function getUserCoins(Request $request)
    {
        $user_id = $request->input('user_id');

        return $this->repository->getCoin($user_id);
    }
}
