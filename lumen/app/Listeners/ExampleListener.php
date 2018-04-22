<?php

namespace AppListeners;

use AppEventsExampleEvent;
use IlluminateQueueInteractsWithQueue;
use IlluminateContractsQueueShouldQueue;

class ExampleListener
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
     * @param  ExampleEvent  $event
     * @return void
     */
    public function handle(ExampleEvent $event)
    {
        //
    }
}
