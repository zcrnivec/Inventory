<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Router extends Model
{
    // use Notifiable;
    public $timestamps = false;
    protected $table = 'routers';
    protected $primaryKey = 'router_id';

    protected $fillable = [
        "router_id", "Vendor", "Model", "SerialNumber", "Software", "Memory", "Modules", "Interfaces", "assistance_id",
    ];

    public function assistance()
    {
      return $this->belongsTo(Assistance::class, 'assistance_id');
    }

}
