<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    // use Notifiable;
    public $timestamps = false;
    protected $table = 'assistance_regime';
    protected $primaryKey = 'assistance_id';
    protected $fillable = [
        "assistance_id", "name", "price",
    ];

    public function router()
    {
       return $this->hasMany(Router::class);
    }
   public function firewall()
   {
       return $this->hasMany(Firewall::class);
   }
   public function sswitch()
   {
       return $this->hasMany(SSwitch::class);
   }
   public function accesspoint()
   {
       return $this->hasMany(AccessPoint::class);
   }
   public function server()
   {
       return $this->hasMany(Server::class);
   }
}
