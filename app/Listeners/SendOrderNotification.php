<?php

namespace App\Listeners;

use App\Events\OrderProcessed;
use App\Mail\Orders;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendOrderNotification
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
     * @param  \App\Events\OrderProcessed  $event
     * @return void
     */
    public function handle(OrderProcessed $event)
    {
        Mail::to(Auth::user()->email)->send(new Orders($event->data));
    }
}
