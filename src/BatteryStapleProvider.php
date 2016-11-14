<?php

namespace Geekish\FakerHorseBatteryStaple;

use Faker\Provider\Base as BaseProvider;
use Yuloh\BatteryStaple\PasswordGenerator;

/**
 * Provider for the Faker generator
 */
class BatteryStapleProvider extends BaseProvider
{
    public function correctHorseBatteryStaple($delimiter = '')
    {
        return PasswordGenerator::generate($delimiter);
    }
}
