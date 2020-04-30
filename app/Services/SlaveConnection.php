<?php

namespace App\Services;

use App\Client;
use Illuminate\Support\Facades\Config;

class SlaveConnection
{
    /**
     * @var Client
     */
    private $client;

    /**
     * SlaveConnection constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $id
     */
    public function setConnection(int $id)
    {
        $this->client = $this->client->findOrFail($id);

        Config::set('database.connections.' . $this->client->database, [
            'driver'   => 'mysql',
            'host'     => $this->client->host,
            'port'     => 3306,
            'database' => $this->client->database,
            'username' => $this->client->username,
            'password' => $this->client->password,
        ]);
    }

    /**
     * @return string
     */
    public function getConnectionName()
    {
        return $this->client->database;
    }
}
