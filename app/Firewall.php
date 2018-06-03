<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Firewall extends Model
{
    // use Notifiable;
    public $timestamps = false;
    protected $table = 'firewalls';
    protected $primaryKey = 'firewall_id';

    protected $fillable = [
        "firewall_id", "Vendor", "Model", "SerialNumber", "Software", "Memory", "Modules", "Interfaces", "assistance_id",
    ];
    public function assistance()
    {
      return $this->belongsTo(Assistance::class, 'assistance_id');
    }
}
