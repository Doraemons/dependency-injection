# DependencyInjection

# 目录

-[简介](#)
-[安装](#)
-[使用](#)
    -[ServiceProvider](#)
    -[Facade](#)

# 简介

 本插件来自 Laravel 5.2, 能够实现 ServiceProvider,Facade !

# 安装

```shell
composer require doraemons/dependency-injection

```

# 使用

## ServiceProvider
1. 初始化

```php
<?php
require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';


use Doraemons\DependencyInjection\Application;

$app = new Application([]);

```
2. 添加 ServiceProvider

```php
<?php

use Doraemons\DependencyInjection\ServiceProvider;
use Doraemons\Events\EventDispatcher;

class EventServiceProvider extends ServiceProvider
{
    //是否延迟注册
    protected $defer = false;

    public function boot()
    {
         // 注册完 EventServiceProvider, 自动调用此方法
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('events', function ($app) {
            return new EventDispatcher($app);
        });
    }

    public function provides()
    {
        //如果是延迟注册 请返回要注册的 名字
        //return ['events'];
    }
}

```

3. 注册 ServiceProvider

> 更多用法参见 [laravel-ServiceProvider](#)

## Facade

1. 初始化

```php
<?php
use Doraemons\DependencyInjection\Facade\Facade;
use Doraemons\DependencyInjection\AliasLoader;

Facade::clearResolvedInstances();
Facade::setFacadeApplication($app);

$alias = [];

AliasLoader::getInstance($alias)->register();
```
2. 添加 Facade


```php
<?php

use \Doraemons\DependencyInjection\Facade\Facade;

class EventFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'events';
    }
}

```

> 你要想用 这个首先你得 添加 `ServiceProvider`


3. 注册 Facade

```php
<?php

$alias = [
    'Event' => EventFacade::class
];

```

> 更多用法参见 [laravel-Facade](#)

