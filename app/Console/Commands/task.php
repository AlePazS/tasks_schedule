<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;

class task extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tasks:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviara un numero que establecere en duro';

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
        $totalUsers=5;
       Mail::to('pdinaalejandra@gmail.com')->send(new SendMailable($totalUsers));
    }
}
