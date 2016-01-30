# Laravel-Active

Laravel helper that detects active navigation menu items and applies bootstrap classes.
This is an implementation of https://github.com/laravelista/Ekko.
In this implementation, you can use it with resouce name too.


## Installation

First, pull in the package through Composer.

```js
"require": {
    "lucadello91/laravel-active": "~1.0"
}
```

And then, if using Laravel 5 or 4, include the service provider within `app/config/app.php`.

```php
'providers' => [
    Lucadello91\LaravelActive\LaravelActiveServiceProvider::class
];
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    'Active'    => Lucadello91\LaravelActive\Facades\LaravelActive::class
];
```

## Usage

You would most likely use this package in your `navbar` partial like so:

```php
<li>
    <a href="{{ route('home') }}" class="{{ Ekko::isActiveRoute('home') }}">
        <i class="halflings white home"></i> Home
    </a>
</li>

<li>
    <a href="#" class="{{ Ekko::areActiveRoutes(['murter', 'kornati']) }}">
        <i class="halflings white screenshot"></i> Location
    </a>
    <ul>
        <li>
            <a href="{{ route('murter') }}">Murter</a>
        </li>
        <li>
            <a href="{{ route('kornati') }}">Kornati</a>
        </li>
    </ul>
</li>

<li>
    <a href="{{ route('trips.index') }}" class="{{ Ekko::isActiveMatch('trips') }}">
        <i class="halflings white road"></i> Trips
    </a>
</li>
```

## API

As the second parameter to any method, you can pass the value you want to get returned if there was a match. *By default this is `active` which is Bootstrap default.*

As the third parameter to any method, you can pass the value you want to get returned if there wasn't a match. *By default this is empty string.*

#### `isActiveRoute($routeName, $active = "active", $notActive = "")`

Compares given route name with current route name.

```php
{{ Ekko::isActiveRoute('home') }}
```

#### `isActiveRouteResourceName($resourceName, $active = "active", $notActive = "")`

Compares given resource name with current Route::Resource name.

```php
{{ Ekko::isActiveRouteResourceName('home') }}
```

#### `isActiveURL($url, $active = "active", $notActive = "")`

Compares given URL with current URL.

```php
{{ Ekko::isActiveURL('/about') }}
```

#### `isActiveMatch($string, $active = "active", $notActive = "")`

Detects if the given string is found in the current URL.

```php
{{ Ekko::isActiveMatch('bout') }}
```

#### `areActiveRoutes(array $routeNames, $active = "active", $notActive = "")`

Compares given array of route names with current route name.

```php
{{ Ekko::areActiveRoutes(['product.index', 'product.show']) }}
```

#### `areActiveRoutesResourcesNames(array $resourcesNames, $active = "active", $notActive = "")`

Compares given array of resource names with current Route::Resource name.

```php
{{ Ekko::areActiveRoutes(['post', 'comments']) }}
```

#### `areActiveURLs(array $urls, $active = "active", $notActive = "")`

Compares given array of URLs with current URL.

```php
{{ Ekko::areActiveURLs(['/product', '/product/create']) }}
```