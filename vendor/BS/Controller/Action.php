<?php

namespace BS\Controller;

abstract class Action {
    protected $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    public function render($view, $layout = 'layout'){
        $this->view->page = $view;
        $file = "../App/Views/".$layout.".phtml";
        if(file_exists($file)){
            require_once "../App/Views/".$layout.".phtml";
        }else{
            $this->content();
        }
        
    }

    protected function content(){
        $thisClass = str_replace('App\\Controllers\\', '', get_class($this));
        $thisClass = strtolower(str_replace('Controller', '', $thisClass));
        require_once "../App/Views/".$thisClass."/".$this->view->page.".phtml";
    }
}
?>

