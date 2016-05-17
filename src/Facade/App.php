<?php
/**
 * Created by PhpStorm.
 * User: a9396
 * Date: 2016/5/17
 * Time: 20:01
 */

namespace Doraemons\DependencyInjection\Facade;


class App extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'app';
    }
}