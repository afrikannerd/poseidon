<?php
/**
 * Created by PhpStorm.
 * User: nerd
 * Date: 17/07/2018
 * Time: 17:56
 */

namespace App\Controllers;


use Core\Controller;
use Core\Model;

class TeacherController extends Controller
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
        if(!Session::exists('teacher')){
            header('location: /auth/login');
            exit;
        }
    }
    public function index()
    {
        $this->view->render('teacher/index');
    }
    public function __call($name, $arguments)
    {}
}