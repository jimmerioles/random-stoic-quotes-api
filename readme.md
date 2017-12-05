# Random Inspiring Quotes API
This [JSON API v1](http://jsonapi.org) compliant Web API provides collection of inspiring quotes from notable individuals.

## API Endpoints
![Endpoints](https://user-images.githubusercontent.com/9766310/33596375-75660918-d9d6-11e7-92c3-8a6dd430d097.png)

## Sample API Request
```
curl --header "Accept: application/vnd.api+json" https://random-inspiring-quotes-api.herokuapp.com/api/v1/quotes
```

## Sample API Response
![Response](https://user-images.githubusercontent.com/9766310/33598117-8e0e2396-d9dc-11e7-81cd-d23c0bb17a2e.png)

# Bitcoin Currency Converter

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-coverage]][link-coverage]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This library helps developers that need to easily convert bitcoin to fiat currency(ISO 4217) or to another cryptocurrency and vice versa from your exchange rates provider of choice.

Available exchange rates providers are:
* [Coinbase][link-coinbase-rates]
* [Coindesk][link-coindesk-rates]
* [Bitpay][link-bitpay-rates]

If you have any request for other exchange rates provider or other features that you would like for me to add see [Contributing][link-contributing].

## Features

It is simple, lightweight, extensible, framework agnostic and fast.

* You can convert Bitcoin to any currency (ISO 4217 fiat or another cryptocurrency)
* You can convert any currency (ISO 4217 fiat or another cryptocurrency) to Bitcoin
* It supports different exchange rates providers: Coinbase, Coindesk, Bitpay
* It has baked-in caching (PSR16 compliant, swappable with your own or your framework's)

## Install

Lets begin by installing the library by Composer:

``` bash
$ composer require jimmerioles/bitcoin-currency-converter-php
```

## Usage

#### You can then convert Bitcoin to any currency (ISO 4217 fiat or crypto) by:

``` php
use Jimmerioles\BitcoinCurrencyConverter\Converter;

$convert = new Converter;              // uses Coinbase as default provider
echo $convert->toCurrency('USD', 0.5); // 2000.00
echo $convert->toCurrency('LTC', 0.5); // 10.12345678
```

or you can use the helper function for convenience:

``` php
// uses Coinbase as default provider
echo to_currency('USD', 0.5); // 2000.00
echo to_currency('LTC', 0.5); // 10.12345678
```

#### You can also convert any currency (ISO 4217 fiat or crypto) to Bitcoin:

``` php
use Jimmerioles\BitcoinCurrencyConverter\Converter;

$convert = new Converter;         // uses Coinbase as default provider
echo $convert->toBtc(100, 'USD'); // 0.12345678
echo $convert->toBtc(20, 'LTC');  // 1.12345678
```

and it also has its helper function for convenience:

``` php
// uses Coinbase as default provider
echo to_btc(100, 'USD'); // 0.12345678
echo to_btc(20, 'LTC');  // 2.12345678
```

#### You can use different exchange rates from providers:

``` php
use Jimmerioles\BitcoinCurrencyConverter\Converter;
use Jimmerioles\BitcoinCurrencyConverter\Provider\CoinbaseProvider;
use Jimmerioles\BitcoinCurrencyConverter\Provider\CoindeskProvider;
use Jimmerioles\BitcoinCurrencyConverter\Provider\BitpayProvider;

$convert = new Converter(new CoinbaseProvider);
$convert = new Converter(new CoindeskProvider);
$convert = new Converter(new BitpayProvider);
```

or if you prefer to use the helper functions:

``` php
echo to_currency('USD', 0.5, new CoindeskProvider); // 2000.00
echo to_currency('LTC', 0.5, new BitpayProvider);   // 10.12345678
echo to_btc(100, 'USD', new CoindeskProvider);      // 0.12345678
echo to_btc(20, 'LTC', new BitpayProvider);         // 2.12345678
```

#### You can specify cache expire time (ttl) on provider by:

``` php
new CoinbaseProvider($httpClient, $psr16CacheImplementation, 5); // cache expires in 5mins, defaults to 60mins
```

## Change log

Please see [CHANGELOG][link-changelog] for more information on what has changed recently.

## Testing

``` bash
$ phpunit
```

#### Show full specs and features:

``` bash
$ phpunit --testdox
```

## Contributing

Open for suggestions and requests. Please request through [issue][link-issue] or [pull requests][link-pull-request].

## Security

If you discover any security related issues, please email jimwisleymerioles@gmail.com instead of using the issue tracker.

## Credits

- [Jim Merioles][link-author]
- [Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

### Want to show some :heart:?

Help me find Satoshi Nakamoto! | Fuel me with Ether :coffee:
------------ | ------------
![Donate Bitcoin][ico-bitcoin] | ![Donate Ethereum][ico-ethereum]

