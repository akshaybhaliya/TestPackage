<?php

namespace Garage\TestPackage\Http\Controllers;
use App\Http\Controllers\Controller;
use Garage\TestPackage\Services\TwilioService;
use Twilio\Rest\Client;

class TestController extends Controller
{
    public function index()
    {
        /*
        $sid    = "ACebd97e65a360dc0d122f3f284f7feaeb"; // Your Twilio SID
        $token  = "91967aa0ffff10cc950247b5509854aa"; // Replace with your actual Auth Token
        $twilio = new Client($sid, $token);

        try {
            $message = $twilio->messages->create(
                "+919377427987", // Recipient phone number
                [
                    "from" => "+14243835563", // Your Twilio number
                    "body" => "Hi Akshay Bhaliya, Congratulations! You have won Rs. 5000 in the Dream11 Mega Contest."
                ]
            );

            echo "Message sent! SID: " . $message->sid;
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        */
        return view('test-package::index');   
    }
}
