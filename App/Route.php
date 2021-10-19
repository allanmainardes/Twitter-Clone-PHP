<?php 
namespace App;

use BS\Init\Bootstrap;

class Route extends Bootstrap{

    public function initRoutes(){
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        $routes['inscreverse'] = array(
            'route' => '/inscreverse',
            'controller' => 'indexController',
            'action' => 'inscreverse'
        );

        $this->setRoutes($routes);
    }
}
?>