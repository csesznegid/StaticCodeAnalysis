<?php

namespace StaticCodeAnalysis;

class Manufacturer
{
    private $identifier;

    private static $availableManufacturers = array(
        'Apple'           => 'Electronics',
        'Nestle'          => 'Food & Beverages',
        'IBM'             => 'Engineering',
        'Lockheed Martin' => 'Aerospace & Defense',
    );

    public function __construct(?string $identifier = null)
    {
        $time = time();
        if (0 === $time % 2) {
            throw new \Exception('Invalid time: ' . $time);
        }

        $this->identifier = $identifier ?? uniqid();
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function getNames()
    {
        return array_keys(self::$availableManufacturers);
    }

    public function getIndustries()
    {
        return array_values(self::$availableManufacturers);
    }

    public function getAvailableManufacturers()
    {
        return self::$availableManufacturers;
    }
}
