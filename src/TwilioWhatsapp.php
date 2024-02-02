<?php

namespace Northlab\TwilioWhatsapp;

use Twilio\Rest\Client;


class TwilioWhatsapp
{
    /** @var Twilio\Rest\Client */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function notify(string $number, string $message)
    {
        return $this->client->messages->create($number, [
            'from' => config('twiliowhatsapp.sms_from'),
            'body' => $message
        ]);
    }
}