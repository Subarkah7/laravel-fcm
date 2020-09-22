<?php

namespace App\Observers;
use App\Model\DeviceToken;
use App\Model\DeviceAudit;


class DeviceTokenObserver
{
    public function created(DeviceToken $token) {
        $audit = new DeviceAudit();
        $audit->device_token_id = $token->id;
        $audit->user_id = $token->user_id;
        $audit->action_at = date('Y-m-d H:i:s');
        $audit->action = 'Add';
        $audit->save();
    }

    public function updated(DeviceToken $token)
    {
        //
    }
    /**
     * Handle the token "deleted" event.
     *
     * @param  \App\DeviceToken  $token
     * @return void
     */
    public function deleted(DeviceToken $token)
    {
        //
    }
    /**
     * Handle the token "restored" event.
     *
     * @param  \App\DeviceToken  $token
     * @return void
     */
    public function restored(DeviceToken $token)
    {
        //
    }
    /**
     * Handle the token "force deleted" event.
     *
     * @param  \App\DeviceToken  $token
     * @return void
     */
    public function forceDeleted(DeviceToken $token)
    {
        //
    }
}
