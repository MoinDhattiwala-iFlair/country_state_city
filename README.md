# country_state_city

[![Issues](https://img.shields.io/github/issues/MoinDhattiwala-iFlair/country_state_city?style=flat-square)](https://github.com/MoinDhattiwala-iFlair/country_state_city/issues)

[![Stars](https://img.shields.io/github/stars/MoinDhattiwala-iFlair/country_state_city?style=flat-square)](https://github.com/MoinDhattiwala-iFlair/country_state_city/stargazers)

This package will help to show list of all country, state and city it will also fetch state list according to country and city list according to states

This package is made for laravel projects only

Setup
-> composer require moindhattiwala/country_state_city
-> php artisan vendor:publish --provider "MoinDhattiwala\CountryStateCity\CountryStateCityServiceProvider"
-> php artisan migrate
-> php artisan db:seed --class=CountryStateCitySeeder

For local demo run 
->php artisan serve 
-> http://127.0.0.1:8000/csc



