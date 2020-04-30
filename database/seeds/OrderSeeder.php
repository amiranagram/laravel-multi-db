<?php

use App\Client;
use App\Facades\Slave;
use App\SlaveModels\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::all();

        $clients->each(function ($client) {
            Slave::setConnection($client->id);

            factory(Order::class, 100)->connection(Slave::getConnectionName())->create();
        });
    }
}
