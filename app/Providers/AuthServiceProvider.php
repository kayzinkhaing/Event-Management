<?php

namespace App\Providers;

use App\Models\Attendee;
use App\Models\Event;
// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies=[
       
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Gate::define('update-event',function($user,Event $event){
        //    return $user->id===$event->user_id;
        // });
        // Gate::define('delete_attendee',function($user,Event $event,Attendee $attendee){
        //       return $user->id===$event->user_id ||
        //        $user->id===$attendee->user_id;

        // });
    }
}
