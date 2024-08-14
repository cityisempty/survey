# SurveyJS Form Library is a free to use MIT-licensed client-side component that allows you to render dynamic JSON-based forms in any JavaScript application, collect responses, and send all form submission data to a databasThis package is  an open-source survey component designed to seamlessly integrate with the Filament and Livewire PHP frameworks. Built on top of the robust SurveyJS library, this solution offers developers a powerful and flexible toolset for creating dynamic surveys and forms.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cityisempty/filament-survey.svg?style=flat-square)](https://packagist.org/packages/cityisempty/filament-survey)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/cityisempty/filament-survey/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/cityisempty/filament-survey/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/cityisempty/filament-survey/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/cityisempty/filament-survey/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cityisempty/filament-survey.svg?style=flat-square)](https://packagist.org/packages/cityisempty/filament-survey)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require cityisempty/filament-survey
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-survey-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-survey-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-survey-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentSurvey = new Cityisempty\FilamentSurvey();
echo $filamentSurvey->echoPhrase('Hello, Cityisempty!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lice Sun](https://github.com/cityisempty)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
