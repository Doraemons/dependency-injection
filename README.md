# DependencyInjection

# 目录

-[简介](#)
-[安装](#)
-[使用](#)
    -[ServiceProvider](#)
    -[Facade](#)

# 简介

 本插件来自 Laravel 5.2, 能够实现 ServiceProvider,Facade !

> 关于 phpunit 这个问题，我想说代码 98% 甚至 99% 都是复制 ，所以感觉没必要！！


# 安装

```shell
composer require doraemons/dependency-injection

```

# 使用

## Config

```php
<?php 


$config = [
   'providers' => [
         ...
   ],
   'facades' => [
        'Doraemons' => Illuminate\Support\Facades\App::class,
        'DoraemonsConfig' => Illuminate\Support\Facades\Config::class,
        ....
   ]

]

```


1. 初始化

```php
<?php
require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use Doraemons\DependencyInjection\Container;

$app = new Container($config);

```
2. 添加 ServiceProvider


> 更多用法参见 [laravel-ServiceProvider](#)


3. 添加 Facade

> 更多用法参见 [laravel-Facade](#)

