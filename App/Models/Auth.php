<?php

namespace App\Models;
use \Core\Model;

/**
 * Description of Auth
 * Created on : Jun 29, 2018, 6:29:22 PM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */

class Auth extends Model{

    private $_table = "users";
    public $isLoggedIn = false;
    public $data = [];
    public $errors = [];


    public function __construct() {
        parent::__construct();

    }
    
    public function login(array $columns,array $creds){

        try{
            if($data = $this->_instance->select($this->_table,$columns,$creds))
            {




                if ($data->getRowCount() > 0){
                    $data->results();
                    $this->data = $data->getResult();

                    $this->isLoggedIn = true;
                }



            }else{
                $this->errors [] = "no users found";
            }


        }catch (\PDOException $e)
        {
            $this->isLoggedIn = false;
            throw $e;
        }
        return $this;
    }



    public function isLoggedIn()
    {
        return $this->isLoggedIn;
    }

}
