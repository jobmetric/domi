# Domi for laravel

A full-stack framework for Laravel that takes the hassle out of building dynamic pages.

## Install via composer

Run the following command to pull in the latest version:

```bash
composer require jobmetric/domi
```

### Publish the config
Copy the `config` file from `vendor/jobmetric/domi/config/config.php` to `config` folder of your Laravel application and rename it to `domi.php`

Run the following command to publish the package config file:

```bash
php artisan vendor:publish --provider="JobMetric\Domi\DomiServiceProvider" --tag="domi-config"
```

You should now have a `config/domi.php` file that allows you to configure the basics of this package.

## Documentation
