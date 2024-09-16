<?php

require_once 'vendor/autoload.php'; // Ensure this points to your autoload file

use Faker\Factory;

class Random {
    public static function generatePerson() {
        $faker = Factory::create('en_PH'); // Locale set to the Philippines
        
        return [
            'UUID' => $faker->uuid,
            'Title' => $faker->title,
            'First Name' => $faker->firstName,
            'Last Name' => $faker->lastName,
            'Street Address' => $faker->streetAddress,
            'Barangay' => $faker->streetSuffix, // Not exactly a barangay but a close equivalent
            'Municipality' => $faker->city,
            'Province' => $faker->state,
            'Country' => 'Philippines',
            'Phone Number' => $faker->phoneNumber,
            'Mobile Number' => $faker->phoneNumber,
            'Company Name' => $faker->company,
            'Company Website' => $faker->url,
            'Job Title' => $faker->jobTitle,
            'Favorite Color' => $faker->safeColorName,
            'Birthdate' => $faker->date('Y-m-d'),
            'Email Address' => $faker->email,
            'Password' => password_hash($faker->password, PASSWORD_DEFAULT),
        ];
    }

    // Generate multiple records
    public static function generatePeople($count = 300) {
        $people = [];
        for ($i = 0; $i < $count; $i++) {
            $people[] = self::generatePerson();
        }
        return $people;
    }
}