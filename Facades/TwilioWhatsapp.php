<?php

namespace Northlab\TwilioWhatsapp\Facades\LaraTwilio;

use Illuminate\Support\Facades\Facade;

class TwilioWhatsapp extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'twiliowhatsapp';
    }
}


