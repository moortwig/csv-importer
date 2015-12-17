<?php
namespace Moortwig;

/*
 * Helper class for easier handling with csv files
 * Author: Catarina Höstlöf (info@moortwig.se)
 *
*/
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
}