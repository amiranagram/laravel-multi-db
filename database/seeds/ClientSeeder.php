<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 5)->create()->each(function ($client, $key) {
            $client->database = 'client_' . $client->id;
            $client->save();
        });
    }
}
