# faker-horse-battery-staple

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Generate correcthorsebatterystaple-type passwords with [Faker](//github.com/fzaninotto/Faker) via [yuloh/battery-staple](//github.com/yuloh/battery-staple).

## Install

Via Composer

``` bash
$ composer require geekish/faker-horse-battery-staple
```

## Usage

``` php
use Geekish\FakerHorseBatteryStaple\BatteryStapleProvider;

$faker = \Faker\Factory::create();
$faker->addProvider(new BatteryStapleProvider($faker));

echo $faker->correctHorseBatteryStaple;
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
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
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/geekish/faker-horse-battery-staple.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/geekish/faker-horse-battery-staple
[link-downloads]: https://packagist.org/packages/geekish/faker-horse-battery-staple
[link-author]: https://github.com/geekish
[link-contributors]: ../../contributors
