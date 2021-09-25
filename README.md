# rebilly-apply

PHP application for applying to Rebilly via ApplyByAPI.
Built with [Laravel Zero](https://laravel-zero.com).

## Requires

PHP ^7.3 | PHP ^8
A file named `my-info.json` with the appropriate data to send to the API.

## Usage

Step 1: `./rebilly-apply gentoken [api_url] [posting]`
Step 2: `./rebilly-apply apply [api_url] [token]`
