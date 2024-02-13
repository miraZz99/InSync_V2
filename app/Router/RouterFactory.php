<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;

final class RouterFactory
{
    use Nette\StaticClass;

    public static function createRouter(): RouteList
    {
        $router = new RouteList;

        // Add custom route for ImportPresenter
        $router->addRoute('import', 'Import:default');
        // Default route
        $router->addRoute('<presenter>/<action>[/<id>]', 'Homepage:default');

        return $router;
    }
}

