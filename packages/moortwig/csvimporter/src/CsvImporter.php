<?php

<<<<<<< HEAD
namespace Moortwig\CsvImporter;

class CsvImporter
{
	//
=======
namespace Moortwig;

class CsvImporter
{
	public function getData($file) {
		$collection = [];

		// TODO check that $file is valid, throw exception if not
        $handle = fopen($this->argument('file'), "r");

        if (($handle = fopen($this->argument('file'), "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $collection[] = $data;
            }

            fclose($handle);
        }
        return $collection;
	}
>>>>>>> testing
}