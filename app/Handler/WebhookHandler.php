<?php

namespace App\Handler;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class WebhookHandler extends SpatieProcessWebhookJob{

    public function handle(){
        logger('I was here');
        logger($this->webhookCall);
    }

}