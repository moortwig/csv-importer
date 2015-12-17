<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Moortwig\CsvImporter;

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

    // protected $importer;

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
     * Source: http://php.net/manual/en/function.fgetcsv.php
     *
     * @return mixed
     */
    public function handle(CsvImporter $importer)
    {


        $characters = $importer->getData($this->argument('file'));

        /*$characters = [];


        $handle = fopen($this->argument('file'), "r");

        if (($handle = fopen($this->argument('file'), "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $characters[] = $data;
            }

            fclose($handle);
        }*/


        var_dump($characters); // yes, now we have something nice to work with!



        $this->info('end of file');
    }
}
