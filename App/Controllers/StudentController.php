<?php
/**
 * Created by PhpStorm.
 * User: nerd
 * Date: 17/07/2018
 * Time: 12:21
 */

namespace App\Controllers;


use Core\Controller;
use Core\Security\Session;

class StudentController extends Controller
{
    public function __construct($model)
    {
        parent::__construct($model);

        if(!Session::exists('student')){
            header('location: /auth/login');
            exit;
        }
    }
    public function index(){
        $this->view->render('student/index');
    }
}