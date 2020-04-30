<?php

use App\Client;
use App\Facades\Slave;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $clients = Client::all();

        $clients->each(function ($client) {
            Slave::setConnection($client->id);

            Schema::connection(Slave::getConnectionName())->create('orders', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $clients = Client::all();

        $clients->each(function ($client) {
            Slave::setConnection($client->id);

            Schema::connection(Slave::getConnectionName())->dropIfExists('orders');
        });
    }
}
