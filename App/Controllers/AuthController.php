<?php

namespace App\Controllers;
use Core\{
    Controller,
    Authenticatable,
    Security\Session,
    Security\Security,
    Security\Cookie
};

/**
 * Description of AuthController
 * Created on : Jun 29, 2018, 6:26:05 PM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */
class AuthController extends Controller implements Authenticatable {
    private $_creds = [],$_isLoggedIn = false,$_columns = [],$_level = null,$_data = null,$_session;

   public function __construct($model)
   {
       parent::__construct($model);
       $this->logout();
        $this->auth();


   }

    public function login() {
        
        if(isset($_POST['login']))
        {

            $this->_creds['username'] = $_POST['user'];
            $this->_creds['password'] = $_POST['pass'];

            $this->_columns = ['*'];

            $this->_data  =  $this->model->login($this->_columns,$this->_creds)->data;
            
                if ($this->_data) {

                    Cookie::set('name', $this->_data->username, (time()+100));

                    switch ($this->_data->acl)
                    {

                        case "A":
                            Session::set(['user_id'=>$this->_data->id,'admin'=>true,'username'=>$this->_data->username,
                                'level'=>$this->_data->acl]);
                            header("location: /dashboard");
                            exit;
                            break;
                        case "T":
                            Session::set(['user_id'=>$this->_data->id,'teacher'=>true,'username'=>$this->_data->username,
                                'level'=>$this->_data->acl]);
                            header("location: /teacher");
                            exit;
                            break;
                        case "S":
                            Session::set(['user_id'=>$this->_data->id,'student'=>true,'username'=>$this->_data->username,
                                'level'=>$this->_data->acl,'name'=> $this->_data->name]);
                            header("location: /student");
                            exit;
                            break;
                        default:
                            header("location: /404");
                            exit;
                            break;
                    }




                }else{
                     $this->view->render('dashboard/login',['error' => "Wrong Credentials"]);
                }


            }

        $this->view->render('dashboard/login');

    }

    public function register() {
        
        
        
    }

    public function resetPassword() {
        
        
        
    }
    
    public function logout(){
        if(isset($_POST['logout']))
        {
            Session::killAll();
            header('location: /auth/login');
        }
        
        
        
            
    }

    protected function auth()
    {
        if(Session::exists('level') === true)
        {
            $acl = Session::get('level');
            switch ($acl) {
                case 'A':
                    header('location: /dashboard');
                    exit;
                    break;
                case 'T':
                    header('location: /teacher');
                    exit;
                    break;
                case 'S':
                    header('location: /student');
                    exit;
                    break;
                default:
                    header('location: /404');
                    exit;
                    break;
            }
        }else{
            $this->login();
            exit;
        }
    }

}
