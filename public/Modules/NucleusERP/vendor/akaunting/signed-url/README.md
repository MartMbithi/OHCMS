# Signed (unique) URL package for Laravel.

[![Version](https://poser.pugx.org/akaunting/signed-url/v/stable.svg)](https://github.com/akaunting/signed-url/releases)
[![StyleCI](https://styleci.io/repos/102290249/shield?style=flat&branch=master)](https://styleci.io/repos/102290249)
[![Downloads](https://poser.pugx.org/akaunting/signed-url/d/total.svg)](https://github.com/akaunting/signed-url)
[![License](https://poser.pugx.org/akaunting/signed-url/license.svg)](LICENSE.md)

This package can create URLs with a limited lifetime. This is done by adding an expiration date and a signature to the URL.

This is how you can create signed URL that's valid for 30 days:

```php
SignedUrl::sign('https://myapp.com/protected-route', 30);
```

The output will look like this:

```
https://app.com/protected-route?expires=xxxxxx&signature=xxxxxx
```

The URL can be validated with the `validate`-function.

```php
SignedUrl::validate('https://app.com/protected-route?expires=xxxxxx&signature=xxxxxx');
```

The package also provides [a middleware to protect routes](https://github.com/akaunting/signed-url#protecting-routes-with-middleware).

## Installation

As you would have guessed the package can be installed via Composer:

```
composer require akaunting/signed-url
```

This package intends to provide tools for formatting and conversion monetary values in an easy, yet powerful way for Laravel projects. In older versions of the framework, just add the serviceprovider, and optionally register the facade:

```php
// config/app.php

'providers' => [
    ...
    Akaunting\SignedUrl\Provider::class,
];

'aliases' => [
    ...
    'SignedUrl' => Akaunting\SignedUrl\Facade::class,
];
```

## Configuration

The configuration file can optionally be published via:

```
php artisan vendor:publish --provider=signed-url
```

This is the content of the file:

```php
return [

    /*
    * This string is used the to generate a signature. You should
    * keep this value secret.
    */
    'signatureKey' => env('APP_KEY'),

    /*
     * The default expiration time of a URL in days.
     */
    'default_expiration_time_in_days' => 1,

    /*
     * These strings are used a parameter names in a signed url.
     */
    'parameters' => [
        'expires' => 'expires',
        'signature' => 'signature',
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | This option indicates the middleware to change language.
    |
    */
    'middleware'    => 'Akaunting\SignedUrl\Middleware\ValidateSignedUrl',

];
```
## Usage

### Signing URLs
URL's can be signed with the `sign`-method:
```php
SignedUrl::sign('https://myapp.com/protected-route');
```
By default the lifetime of an URL is one day. This value can be change in the config-file.
If you want a custom life time, you can specify the number of days the URL should be valid:

```php
//the generated URL will be valid for 5 days.
SignedUrl::sign('https://myapp.com/protected-route', 5);
```

For fine grained control, you may also pass a `DateTime` instance as the second parameter. The url
will be valid up to that moment. This example uses Carbon for convenience:
```php
//This URL will be valid up until 2 hours from the moment it was generated.
SignedUrl::sign('https://myapp.com/protected-route', Carbon\Carbon::now()->addHours(2) );
```

### Validating URLs
To validate a signed URL, simply call the `validate()`-method. This return a boolean.
```php
SignedUrl::validate('https://app.com/protected-route?expires=xxxxxx&signature=xxxxxx');
```

### Protecting routes with middleware
The package also provides a middleware to protect routes:

```php
Route::get('protected-route', ['middleware' => 'signed', function () {
    return 'Hello secret world!';
}]);
```
Your app will abort with a 403 status code if the route is called without a valid signature.


## Changelog

Please see [Releases](../../releases) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@akaunting.com instead of using the issue tracker.

## Credits

- [Cüneyt Şentürk](https://github.com/cuneytsenturk)
- [Sebastian De Deyne](https://github.com/sebastiandedeyne)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
