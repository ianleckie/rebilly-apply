# rebilly-apply

PHP application (PHAR acrhive) for applying to Rebilly via ApplyByAPI.   
Built with [Laravel Zero](https://laravel-zero.com).

## Requires

* PHP >= 7.3
* A file named `my-info.json` with the appropriate data to send to the API.

## Usage

1. `./rebilly-apply gentoken [api_url] [posting]`
2. `./rebilly-apply apply [api_url] [token]`
