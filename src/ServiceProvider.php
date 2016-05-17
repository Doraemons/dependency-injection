<?php
/**
 * Created by PhpStorm.
 * User: a9396
 * Date: 2016/5/16
 * Time: 22:08
 */

namespace Doraemons\DependencyInjection;

use BadMethodCallException;
use Doraemons\Container\Container;

abstract class ServiceProvider
{
    /**
     * The application instance.
     *
     * @var Container
     */
    protected $app;

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * The paths that should be published.
     *
     * @var array
     */
    protected static $publishes = [];

    /**
     * The paths that should be published by group.
     *
     * @var array
     */
    protected static $publishGroups = [];

    /**
     * Create a new service provider instance.
     *
     * @param  Application  $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    abstract public function register();

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    /**
     * Get the events that trigger this service provider to register.
     *
     * @return array
     */
    public function when()
    {
        return [];
    }

    /**
     * Determine if the provider is deferred.
     *
     * @return bool
     */
    public function isDeferred()
    {
        return $this->defer;
    }

    /**
     * Get a list of files that should be compiled for the package.
     *
     * @return array
     */
    public static function compiles()
    {
        return [];
    }

    /**
     * Dynamically handle missing method calls.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call($method, $parameters)
    {
        if ($method == 'boot') {
            return;
        }

        throw new BadMethodCallException("Call to undefined method [{$method}]");
    }
}