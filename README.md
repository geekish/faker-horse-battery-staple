# faker-horse-battery-staple

[![Latest Version on Packagist][ico-version]][link-packagist]
![Tests](https://github.com/geekish/faker-horse-battery-staple/workflows/Tests/badge.svg?branch=master)
[![Total Downloads][ico-downloads]][link-downloads]

Generate correcthorsebatterystaple-type passwords with [Faker](https://github.com/FakerPHP/Faker) via [yuloh/battery-staple](https://github.com/yuloh/battery-staple).

## Install

Via Composer

``` bash
composer require geekish/faker-horse-battery-staple
```

## Usage

``` php
use Faker\Factory;
use Geekish\FakerHorseBatteryStaple\BatteryStapleProvider;

$faker = Factory::create();
$faker->addProvider(new BatteryStapleProvider($faker));

// no delimiter - e.g. correcthorsebatterystaple
echo $faker->correctHorseBatteryStaple;

// with "." as delimiter - e.g. correct.horse.battery.staple
echo $faker->correctHorseBatteryStaple('.');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hannahwarmbier@gmail.com instead of using the issue tracker.

## Credits

- [Hannah Warmbier][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/geekish/faker-horse-battery-staple.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/geekish/faker-horse-battery-staple.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/geekish/faker-horse-battery-staple
[link-downloads]: https://packagist.org/packages/geekish/faker-horse-battery-staple
[link-author]: https://github.com/geekish
[link-contributors]: ../../contributors
