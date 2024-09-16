<?php

require_once 'FileUtility.php';
require_once 'Random.php';

// Generate 300 records of random people
$people = Random::generatePeople(300);

// Prepare CSV data (headers)
$headers = ['UUID', 'Title', 'First Name', 'Last Name', 'Street Address', 'Barangay', 'Municipality', 'Province', 'Country', 'Phone Number', 'Mobile Number', 'Company Name', 'Company Website', 'Job Title', 'Favorite Color', 'Birthdate', 'Email Address', 'Password'];

// Add headers to the data
array_unshift($people, $headers);

// Save to a CSV file
FileUtility::writeToFile('persons.csv', $people);

echo "Data successfully generated and saved to persons.csv";