<?php

namespace App\Observers;

use App\race;

class studObserver
{
    /**
     * Handle the race "created" event.
     *
     * @param  \App\race  $race
     * @return void
     */
    public function created(race $race)
    {
        //
    }

    /**
     * Handle the race "updated" event.
     *
     * @param  \App\race  $race
     * @return void
     */
    public function updated(race $race)
    {
        //
    }

    /**
     * Handle the race "deleted" event.
     *
     * @param  \App\race  $race
     * @return void
     */
    public function deleted(race $race)
    {
        //
    }

    /**
     * Handle the race "restored" event.
     *
     * @param  \App\race  $race
     * @return void
     */
    public function restored(race $race)
    {
        //
    }

    /**
     * Handle the race "force deleted" event.
     *
     * @param  \App\race  $race
     * @return void
     */
    public function forceDeleted(race $race)
    {
        //
    }
}
