<?php
namespace Test\TestPackage\Services;

use Twilio\Rest\Client;

class TwilioService
{
    protected $client;

    public function __construct()
    {
        $sid = config('twilio.sid');
        $token = config('twilio.token');
        $this->client = new Client($sid, $token);
    }

    public function sendSms($to, $message)
    {
        $from = config('twilio.from');
        return $this->client->messages->create($to, [
            'from' => $from,
            'body' => $message
        ]);
    }
}
