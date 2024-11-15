<?php

use Illuminate\Support\Facades\Route;
use Test\TestPackage\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'test-package'], function () {
    Route::get('/', [TestController::class, 'index'])->name('test-package.index');
});
// Route::get('/test-package', [TestController::class, 'index']);

Route::get('/test-sms', function () {
    $sid = config('twilio.sid');
    $token = config('twilio.token');
    $twilio = new \Twilio\Rest\Client($sid, $token);

    try {
        $message = $twilio->messages->create(
            '+919377427987', // Replace with your test recipient
            [
                'from' => config('twilio.from'),
                'body' => 'Testing Twilio SMS',
            ]
        );
        return "Message sent! SID: " . $message->sid;
    } catch (\Exception $e) {
        return "Failed to send message: " . $e->getMessage();
    }
});
