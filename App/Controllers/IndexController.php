<?php

namespace App\Controllers;

use \BS\Controller\Action;
use \BS\Model\Container;

class IndexController extends Action{

    public function index(){
        $this->render('index');
    }

    public function inscreverse(){
        $this->render('inscreverse');
    }
}
?>