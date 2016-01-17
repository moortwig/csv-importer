<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Moortwig\CsvImporter\CsvImporter;

// This is just a file where I can manually test the helper methods in the CsvImporter package, so it's not a part of the package itself!

class ImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import a csv file';

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

        $handle = fopen($this->argument('filename'), "r");
        $data = $importer->getData($handle);

        var_dump($data);



        $this->info('end of file');
    }
}
