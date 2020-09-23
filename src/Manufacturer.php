<?php

/**
 * This file is part of the "Static Code Analysis" package
 *
 * @author Denes Csesznegi
 * @since  2020.09.23.
 */

namespace StaticCodeAnalysis;

/**
 * Class Manufacturer
 *
 * @package StaticCodeAnalysis
 */
class Manufacturer
{
    /**
     * Unique ID
     *
     * @var    string $identifier
     * @access private
     */
    private $identifier;

    /**
     * Available Manufacturers' list
     *
     * @var    string[] $availableManufacturers
     * @access private
     * @static
     */
    private static $availableManufacturers = array(
        'Apple'           => 'Electronics',
        'Nestle'          => 'Food & Beverages',
        'IBM'             => 'Engineering',
        'Lockheed Martin' => 'Aerospace & Defense',
    );

    /**
     * Manufacturer constructor
     *
     * @param  null|string $identifier
     * @throws \Exception
     * @access public
     */
    public function __construct(?string $identifier = null)
    {
        $time = time();
        if (0 === $time % 2) {
            throw new \Exception('Invalid time: ' . $time);
        }

        $this->identifier = $identifier ?? uniqid();
    }

    /**
     * Returns unique ID
     *
     * @return string
     * @access public
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Returns the keys (names) of the available manufacturers
     *
     * @return string[]
     * @access public
     */
    public function getNames()
    {
        return array_keys(self::$availableManufacturers);
    }

    /**
     * Returns the values (industries) of the available manufacturers
     *
     * @return string[]
     * @access public
     */
    public function getIndustries()
    {
        return array_values(self::$availableManufacturers);
    }

    /**
     * Returns the available manufacturers
     *
     * @return string[]
     * @access public
     */
    public function getAvailableManufacturers()
    {
        return self::$availableManufacturers;
    }
}
