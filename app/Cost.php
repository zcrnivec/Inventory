<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    // use Notifiable;
    public $timestamps = false;
    protected $table = 'assistanceAnually';
    protected $primaryKey = 'id';

    protected $fillable = [
        "id", "name", "numOfDevices","pricePerDevice", "routersYearlyPrice", "switchesYearlyPrice", "firewallsYearlyPrice", "apsYearlyPrice", "total",
    ];
}
