<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Orders\Order;

class IndexController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('index', [
            'orders' => Order::all(),
        ]);
    }
}
