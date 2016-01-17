<?php
namespace Moortwig\CsvImporter;


/*
 * Helper class for easier handling with csv files
 * Author: Catarina Höstlöf (info@moortwig.se)
 *
*/
class CsvImporter
{
	public function getData($handle) {
		$collection = [];

		if ($handle) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $collection[] = $data;
            }

            fclose($handle);
        }

        return $collection;
	}
}