<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ShopRepository;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct(ShopRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getBoxes(Request $request)
    {
        return $this->repository->getBoxes();
    }

    public function getRunes(Request $request)
    {
        return $this->repository->getRunes();
    }

    public function getPrizes(Request $request)
    {
        return $this->repository->getPrizes();
    }

    public function buyBox(Request $request)
    {
        $itemId = $request->input('item_id');
        $userId = $request->input('user_id');

        return $this->repository->buyBox($itemId, $userId);
    }

    public function buyPrize(Request $request)
    {
        $itemId = $request->input('item_id');
        $userId = $request->input('user_id');

        return $this->repository->buyPrize($itemId, $userId);
    }

    public function buyRune(Request $request)
    {
        $itemId = $request->input('item_id');
        $userId = $request->input('user_id');

        return $this->repository->buyRune($itemId, $userId);
    }
}
