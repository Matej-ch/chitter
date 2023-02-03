<?php

namespace App\Listeners;

use App\Events\ChitterCreated;
use App\Models\User;
use App\Notifications\NewChitter;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendChitterCreatedNotifications implements ShouldQueue
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
     * @param \App\Events\ChitterCreated $event
     * @return void
     */
    public function handle(ChitterCreated $event)
    {
        foreach (User::whereNot('id', $event->chitter->user_id)->cursor() as $user) {

            $user->notify(new NewChitter($event->chitter));

        }
    }
}
