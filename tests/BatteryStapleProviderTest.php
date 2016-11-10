<?php

namespace Geekish\FakerHorseBatteryStaple;

use Faker\Generator;

class BatteryStapleProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    protected $faker;

    /**
     * Set up Faker Generator with BatteryStapleProvider
     */
    public function setUp()
    {
        $faker = new Generator;
        $faker->addProvider(new BatteryStapleProvider($faker));

        $this->faker = $faker;
    }

    /**
     * Assert that generated data is not empty?
     */
    public function testNotEmpty()
    {
        $this->assertNotEmpty($this->faker->correctHorseBatteryStaple);
    }
}
