<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Pack;
use Carbon\Carbon;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $reservations=Pack::where('expirer','0')->get();
        foreach ($reservations as $reservation){    
          /*    $formatted_dt1=Carbon::parse($reservation->date_debut); */
             $formatted_dt2=Carbon::parse($reservation->date_fin);
    
                    $now = Carbon::now();
             $diff=$formatted_dt2->diffInDays($now);
              
            
       /*    dd($diff); */
         if($diff==0)
            {
              $reservation->update(['expirer'=>1]);
            } 
           
    }
    }


    
}
