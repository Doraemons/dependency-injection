# DependencyInjection



```php
require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use Doraemons\Tools\Debug\Dumper;
use Doraemons\DependencyInjection\Application;
use Doraemons\DependencyInjection\Facade;
use Doraemons\DependencyInjection\AliasLoader;

$app = new Application();
$app->boot();

Facade::clearResolvedInstances();
Facade::setFacadeApplication($app);

$alias = [
    'Event' => EventFacade::class
];

AliasLoader::getInstance($alias)->register();



```














```php

use \Doraemons\DependencyInjection\Facade;

class EventFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'events';
    }
}

```