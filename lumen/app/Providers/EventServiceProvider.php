<?php

namespace AppProviders;

use LaravelLumenProvidersEventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'AppEventsSomeEvent' => [
            'AppListenersEventListener',
        ],
    ];
}
