<?php

namespace Core;

use Core\Security\Session as Session;
/**
 * Description of Controller
 *
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */

abstract class Controller {
    
    protected $model = MODEL;
    public $view;
    protected $middleware;


    public function __construct(Model $model) {
        Session::init();

        $this->view = new View();
        $this->model =  $model;

    }


    

    
}
