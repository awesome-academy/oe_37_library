<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\BorrowNotification;
use App\Models\User;
use Pusher\Pusher;

class SendNotification extends Controller
{
    public function sendToUser($user_id, $data = [])
    {
        $user = User::find($user_id); 
        $user->notify(new BorrowNotification($data));
        
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $pusher->trigger('NotificationEvent', 'send-message', $data);
    }
}
