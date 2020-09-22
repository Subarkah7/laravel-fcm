<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DeviceAudit extends Model
{
    protected $table = "device_audit";

    protected $fillable = [
        'user_id', 'device_token_id', 'action_at', 'action'
    ];
}
