<?php

namespace Geekish\FakerHorseBatteryStaple;

use Faker\Generator;
use PHPUnit\Framework\TestCase;

class BatteryStapleProviderTest extends TestCase
{
    /**
     * @var Generator
     */
    protected $faker;

    /**
     * Set up Faker Generator with BatteryStapleProvider
     */
    protected function setUp(): void
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

    /**
     * Test password generator with delimiter
     */
    public function testGenerateWithDelimiter()
    {
        $password = $this->faker->correctHorseBatteryStaple('.');
        $this->assertMatchesRegularExpression('/((\w+)\.(\w+)\.(\w+)\.(\w+))/', $password);
    }
}
