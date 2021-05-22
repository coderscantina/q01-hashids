# A demo to show the usage of hashids in a laravel project

## What are hashids

Hahsids are short, unique, non-sequential ids generated from numbers.

## Installation

Download this repository and install the required dependencies:

```shell
composer install
```

Prepare the database, to have some demo data to play with:

```shell
php artisan migrate
php artisan db:seed DemoSeeder
```

## Demo

Hit `/api/profiles` to see a list of user profiles. Note that the IDs are based on hashids. To view a users profile
use one of the returned hashids as value for the placeholder in the route `api/profiles/{user}`

## Usage

There's a video about using hashids on the [Coder's Cantina Youtube channel](https://www.youtube.com/channel/UC-QGuLwEpf5E3kXPwan9aAA) 
