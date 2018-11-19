<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IpAddresses extends Model
{
    //
    protected $fillable = [
        'hostname',
        'ip_address',
        'operating_system',
        'vm',
        'notes'
      ];
}
