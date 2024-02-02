<?php

namespace Northlab\TwilioWhatsapp;

use Exception;
use Twilio\Rest\Client;
use Northlab\TwilioWhatsapp\TwilioWhatsapp;
use Illuminate\Support\ServiceProvider;

class TwilioWhatsappServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/twiliowhatsapp.php', 'twiliowhatsapp');

        $this->app->bind('twiliowhatsapp', function () {
            $this->ensureConfigValuesAreSet();
            $client = new Client(config('twiliowhatsapp.account_sid'), config('twiliowhatsapp.auth_token'));
            return new TwilioWhatsapp($client);
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishConfig();
        }
    }

    protected function ensureConfigValuesAreSet()
    {
        $mandatoryAttributes = config('twiliowhatsapp');

        foreach ($mandatoryAttributes as $key => $value) {
            if (empty($value)) {
                throw new Exception("Please provide a value for ${key}");
            }
        }
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/twiliowhatsapp.php' => config_path('twiliowhatsapp.php'),
        ], 'twiliowhatsapp-config');
    }


}