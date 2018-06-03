<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class SSwitch extends Model
{
    // use Notifiable;
    public $timestamps = false;
    protected $table = 'switches';
    protected $primaryKey = 'switch_id';

    protected $fillable = [
        "switch_id", "Vendor", "Model", "SerialNumber", "Software", "Memory", "Modules", "Interfaces", "assistance_id",
    ];
    public function assistance()
    {
      return $this->belongsTo(Assistance::class, 'assistance_id');
    }

}
