<?php namespace Lucadello91\LaravelActive;

use Route;
use URL;

class LaravelActive {

    /**
     * Compares given route name with current route name.
     *
     * @param  string $routeName
     * @param string $active
     * @param string $notActive
     * @return bool
     * @internal param string $active
     */
    public function isActiveRoute($routeName, $active = "active", $notActive = "")
    {
        if(Route::currentRouteName() == $routeName) return $active;

        return $notActive;
    }

    /**
     * Compares given route name with current route prefix.
     * @param $resourceName
     * @param string $active
     * @param string $notActive
     * @return string
     */
    public function isActiveRouteResourceName($resourceName, $active = "active", $notActive = "")
    {

        $name = Route::getCurrentRoute()->getName();

        if(starts_with($name,$resourceName)) return $active;

        return $notActive;
    }

    /**
     * Compares given URL with current URL.
     *
     * @param  string $url
     * @param  string $active
     * @param string $notActive
     * @return bool
     */
    public function isActiveURL($url, $active = "active", $notActive = "")
    {
        if(URL::current() == url($url)) return $active;

        return $notActive;
    }

    /**
     * Detects if the given string is found in the current URL.
     *
     * @param  string $string
     * @param  string $active
     * @param string $notActive
     * @return bool
     */
    public function isActiveMatch($string, $active = "active", $notActive = "")
    {
        if(strpos(URL::current(), $string)) return $active;

        return $notActive;
    }

    /**
     * Compares given array of route names with current route name.
     *
     * @param  array $routeNames
     * @param  string $active
     * @param string $notActive
     * @return bool
     */
    public function areActiveRoutes(array $routeNames, $active = "active", $notActive = "")
    {
        foreach($routeNames as $routeName)
        {
            if(Route::currentRouteName() == $routeName) return $active;
        }

        return $notActive;
    }

    /**
     * Compares given array of route names with current route prefix.
     * @param array $resourcesNames
     * @param string $active
     * @param string $notActive
     * @return string
     */
    public function areActiveRoutesResourcesNames(array $resourcesNames, $active = "active", $notActive = "")
    {
        $name = Route::getCurrentRoute()->getName();

        foreach($resourcesNames as $resourceName)
        {
            if(starts_with($name,$resourceName)) return $active;
        }

        return $notActive;
    }

    /**
     * Compares given array of URLs with current URL.
     *
     * @param  array $urls
     * @param  string $active
     * @param string $notActive
     * @return bool
     */
    public function areActiveURLs(array $urls, $active = "active", $notActive = "")
    {
        foreach($urls as $url)
        {
            if(URL::current() == url($url)) return $active;
        }

        return $notActive;
    }

}
