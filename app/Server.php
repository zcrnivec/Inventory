<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    // use Notifiable;
    public $timestamps = false;
    protected $table = 'servers';
    protected $primaryKey = 'server_id';

    protected $fillable = [
        "server_id", "Vendor", "Model", "SerialNumber", "Hypervisor", "Cpu", "Memory", "Storage", "Disks", "assistance_id",
    ];

    public function assistance()
    {
      return $this->belongsTo(Assistance::class, 'assistance_id');
    }

}
