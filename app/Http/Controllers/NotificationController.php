<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
       
        $notifications = Notification::where('scheduled_at', '<=', Carbon::now())->get();

        return view('user.notifications', compact('notifications'));
    }

    public function singleNotification($id)
    {
        $notification = Notification::find($id);
        $notification->read = 1;
        $notification->save();
        return view('user.notification', compact('notification'));
    }
}
