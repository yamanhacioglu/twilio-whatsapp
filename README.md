# Northlab Twilio API Composer Package

Bu Composer paketi, Twilio API ile etkileşimde bulunmak için kullanılabilir. Northlab tarafından geliştirilmiştir.

## Kurulum

Composer kullanarak paketi projenize ekleyin:

```bash
composer require northlab/twilio-whatsapp

## Kullanım


<?php

use Northlab\TwilioWhatsapp\Facades\TwilioWhatsapp;

$sendSms = TwilioWhatsapp::notify('+2341234567892', 'Merhaba, ürün ve hizmetlerimiz hakkında bilgi almak ister misiniz?')

return $sendSms;
