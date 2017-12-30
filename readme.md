# Random Stoic Quotes API
This [JSON API v1](http://jsonapi.org) compliant Web API provides collection of stoic quotes from notable individuals. Please feel free to use the endpoint for your project. Available in https://randomstoicquotesapi.herokuapp.com

Note: Heroku free dynos sleep after 30 minutes of inactivity so sometimes your first request might take a bit longer to receive response.

## Features

* JSON API v1 compliant
* CORS compliant

## Built With
* Laravel 5.5

## Usage

### API Endpoints
![Endpoints](https://user-images.githubusercontent.com/9766310/33596375-75660918-d9d6-11e7-92c3-8a6dd430d097.png)

### Sample API Request
``` bash
curl --header "Accept: application/vnd.api+json" https://randomstoicquotesapi.herokuapp.com/api/v1/quotes
```

### Sample API Response
![Response](https://user-images.githubusercontent.com/9766310/33598117-8e0e2396-d9dc-11e7-81cd-d23c0bb17a2e.png)

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

Let's find Satoshi Nakamoto! | or let's have a :coffee:
------------ | ------------
![Donate Bitcoin][ico-bitcoin] | ![Donate Ethereum][ico-ethereum]


[ico-bitcoin]: https://img.shields.io/badge/Bitcoin-1KBT3Mzsr2dZqhQqNYx4gum8Yuyd61UzNk-blue.svg?style=flat-square
[ico-ethereum]: https://img.shields.io/badge/Ethereum-0x7896E9C4118e495Eb7001a847BBFA3C29Dfc69d9-blue.svg?style=flat-square

[link-author]: https://twitter.com/jimmerioles
[link-contributors]: https://github.com/jimmerioles/random-stoic-quotes-api/graphs/contributors
[link-coinbase-rates]: https://www.coinbase.com/charts
[link-coindesk-rates]: https://www.coindesk.com/price
[link-bitpay-rates]: https://bitpay.com/bitcoin-exchange-rates
[link-changelog]: https://github.com/jimmerioles/random-stoic-quotes-api/releases
[link-issue]: https://github.com/jimmerioles/random-stoic-quotes-api/issues/new
[link-pull-request]: https://github.com/jimmerioles/random-stoic-quotes-api/pull/new/master
[link-contributing]: https://github.com/jimmerioles/random-stoic-quotes-api#contributing
