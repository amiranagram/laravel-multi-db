<?php

namespace App\Http\Controllers;

use App\Client;
use App\Facades\Slave;
use App\SlaveModels\Order;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('clients', compact('clients'));
    }

    public function orders($id)
    {
        Slave::setConnection($id);

        $client = Client::findOrFail($id);
        $orders = Order::all();

        return view('orders', compact(['client', 'orders']));
    }
}
