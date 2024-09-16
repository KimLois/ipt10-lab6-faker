<?php

require_once 'FileUtility.php';

// Read data from the CSV file
$people = FileUtility::readFromFile('persons.csv');

// Check if the file has content
if (empty($people)) {
    echo "No data available. Please run generate.php first.";
    exit;
}

// Display data in an HTML table
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
foreach ($people[0] as $header) {
    echo "<th>{$header}</th>";
}
echo "</tr>";
echo "</thead>";
echo "<tbody>";
for ($i = 1; $i < count($people); $i++) {
    echo "<tr>";
    foreach ($people[$i] as $column) {
        echo "<td>{$column}</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";