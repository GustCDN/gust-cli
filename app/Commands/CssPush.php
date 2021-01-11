<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class CssPush extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'css:push';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Push your project CSS up to Gust CDN.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
