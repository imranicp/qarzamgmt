<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    protected $table='Agents';
    protected $primaryKey='agent_id';
    public $timestamps = false;


}
