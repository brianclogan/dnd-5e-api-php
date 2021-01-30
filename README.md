# DND 5e API Wrapper in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/darkgoldblade01/dnd-5e-api.svg?style=flat-square)](https://packagist.org/packages/darkgoldblade01/dnd-5e-api)
[![Build Status](https://img.shields.io/travis/com/darkgoldblade01/dnd-5e-api-php/master.svg?style=flat-square)](https://travis-ci.com/darkgoldblade01/dnd-5e-api-php)
[![Quality Score](https://img.shields.io/scrutinizer/g/darkgoldblade01/dnd-5e-api-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/darkgoldblade01/dnd-5e-api-php)
[![Total Downloads](https://img.shields.io/packagist/dt/darkgoldblade01/dnd-5e-api-php.svg?style=flat-square)](https://packagist.org/packages/darkgoldblade01/dnd-5e-api-php)

This package is a PHP wrapper for the [DND5eAPI](https://www.dnd5eapi.co/).

## Installation

You can install the package via composer:

```bash
composer require darkgoldblade01/dnd-5e-api
```

## Usage

``` php
use Darkgoldblade01\Dnd5eApi;

$api = new Dnd5eApi();

// Get Ability Scores API
$ability_scores_api = $api->ability_scores();

// Get Skills
$skills_api = $api->skills();

// Get Proficiences
$proficiencies_api = $api->proficiencies();

// You can get all items under an api
// This returns an array with all the ability scores in the AbilityScores Models
$ability_scores_api->all();

// Returns the AbilityScore Model based on the index
$ability_scores_api->{ability_score_index}();
//For instance:
$ability_scores_api->cha(); // Returns the Charisma AbilityScores Model
        
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please use the issue tracker.

## Credits

- [Brian Logan](https://github.com/darkgoldblade01)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.