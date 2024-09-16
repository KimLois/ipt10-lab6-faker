<?php

class FileUtility {
    // Method to write data to a CSV file
    public static function writeToFile($filename, $data) {
        $file = fopen($filename, 'w');
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }

    // Method to read the CSV file and return data as an array
    public static function readFromFile($filename) {
        if (!file_exists($filename)) {
            return [];
        }

        $data = [];
        $file = fopen($filename, 'r');
        while (($row = fgetcsv($file)) !== false) {
            $data[] = $row;
        }
        fclose($file);
        return $data;
    }
}