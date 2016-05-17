<?php
/**
 * Created by PhpStorm.
 * User: a9396
 * Date: 2016/5/17
 * Time: 20:02
 */

namespace Doraemons\DependencyInjection\Facade;


class Config extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'config';
    }
}