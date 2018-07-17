<?php

namespace App\Controllers;
use App\Models\Auth;
use Core\{
    Controller, Security\Security, Security\Session
};

/**
 * Description of Dashboard
 * Created on : Jun 22, 2018, 2:22:27 PM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */
class DashboardController extends Controller{

    public function __construct($model) {
        
        parent::__construct($model);


        if(!Session::exists('admin')){
            header('location: /auth/login');
            exit;
        }

    }
    
    public function index(){
        Security::adminAreaAuth();

        $this->view->render('dashboard/index');

    }

    public function teachers(){
        
        
        $this->view->render('dashboard/teacherpanel');
        
    }
    public function students(){
        
        $this->view->render('dashboard/studentpanel');
        
    }
    
    public function fees(){
        
        $this->view->render('dashboard/feepanel');
    }
    
    public function exams(...$args){
        
        $this->view->render('dashboard/exampanel');
    }

    public function __call($name, $arguments) {
        
        $this->view->render('error404');
        
    }


   

}
