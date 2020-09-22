<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Notification;
use App\Model\DeviceToken;
use App\User;

class NotificationController extends Controller
{
    public function index() {
        return view('send-notification');
    }


    public function notif(Request $request) { 
        $pesan = $request->notif;

        $noti = new Notification;

        //single device
        //$token = 'c5YxbrqS7e0:APA91bEtV-XWokjQ6ixFpCvNM4GYBVGQwLLYmhvMqYUzzDqbbgg7DUC5ucVbfz6CXUlaY_31GcuJDG1Be6EK4DM6wzrU9ty_hIYr4KsqdE7yUcZegsPcl5_bJ5do5F-wZ7qUdI-EwERe';

        //$test = $noti->toSingleDevice($token, $pesan, 'body', null, null);

        //multiple device
        $noti->toMultipleDevice(DeviceToken::where('user_id', 1), $pesan, 'Hi', null, null);

        return redirect()->route('home');


    }
}
