<?php

namespace App\Console\Commands;

use Artisan;
use App\Overflight;
use App\OverflightUpdate;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class Init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Initialization:Init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initializes the website.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
		print('Generating project key...' . "\n");
		Artisan::call('key:generate');
		Artisan::call('config:cache');
		print('Migrating tables...' . "\n");
        Artisan::call('migrate');
		print('Seeding tables as appropiate...' . "\n");
		Artisan::call('db:seed');
		print('Linking storage file...' . "\n");
		Artisan::call('storage:link');
		print('Updating the roster...' . "\n");
		Artisan::call('RosterUpdate:UpdateRoster');
		print('Getting the online controllers...' . "\n");
		Artisan::call('OnlineControllers:GetControllers');
		print('Generating current flights within your airspace...' . "\n");
		Artisan::call('Overflights:GetOverflights');
		
		print('All initializing processes are done! Welcome to your new website.');
    }
}
