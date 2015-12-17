<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use moortwig\csvimporter\csvimporterServiceProvider;

class ImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import {file}';

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
        // $handle = fopen($this->argument('file'), 'r');
        $file = file($this->argument('file'));

        // $file = fgetcsv($handle);
        dd($file);
    }
}
