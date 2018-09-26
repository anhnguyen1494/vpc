<?php

namespace App\Listeners;

use App\Events\OrderSuccessEvent;
use App\Notifications\OrderSuccess;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class OrderSuccessListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderSuccessEvent  $event
     * @return void
     */
    public function handle(OrderSuccessEvent $event)
    {
        $order = $event->order;
        Notification::route('mail', env('MY_EMAIL'))
            ->notify(new OrderSuccess($order));
    }
}
