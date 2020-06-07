<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Repositories\InventoryRepository;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function __construct(InventoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getInventory(Request $request)
    {
        $user_id = $request->input('user_id');

        return $this->repository->getInventory($user_id);
    }
}
