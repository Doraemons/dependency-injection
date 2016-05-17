<?php

if (! function_exists('config')) {

    /**
     * Get / set the specified configuration value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    function config($key = null, $default = null)
    {
        if (empty($key)) {
            return Config::toArray();
        }

        if (is_array($key)) {
            return Config::set($key);
        }

        return Config::get($key, $default);
    }
}