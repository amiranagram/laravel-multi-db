<?php

namespace App;

use App\Facades\Slave;
use Illuminate\Database\Eloquent\Model;

class SlaveModel extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setConnection(Slave::getConnectionName());
    }
}
