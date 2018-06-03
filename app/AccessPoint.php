<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class AccessPoint extends Model
{
    // use Notifiable;
    public $timestamps = false;
    protected $table = 'accesspoints';
    protected $primaryKey = 'ap_id';

    protected $fillable = [
        "ap_id", "Vendor", "Model", "SerialNumber", "Software", "Memory", "assistance_id",
    ];
    public function assistance()
    {
      return $this->belongsTo(Assistance::class, 'assistance_id');
    }
}
