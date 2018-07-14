<?php

/**
 * Description of config
 * Handles all site primary configurations such as paths
 * Created on : Jun 16, 2018, 10:44:26 AM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */


ini_set("display_errors",1);
ini_set('session.gc_maxlifetime',10);
error_reporting(E_ALL);



/**
 * Define directory separator
 */


define("DS", "/");


/*
 * Define default controller and its namespace
 */


define('CONTROLLER', '\App\Controllers\HomeController');
define('CONTROLLER_NAME', 'Home');
define('CONTROLLER_NAMESPACE', '\App\Controllers\\');


/*
 * Define default action
 */


define('ACTION', 'index');


/*
 * Define default model and its namespace
 */


define('MODEL', '\App\Models\Home');
define('MODEL_NAMESPACE', '\App\Models\\');


/**
 *
 * @return app root path
 * used when this file is not in the root directory.
 * if file is n indices deep into the directory,return path[n]
 * if file in root directory,replace the function call with plain dirname(__FILE__)
 */


function root(){
    $path = strrev(dirname(__FILE__));
    $path = explode(DIRECTORY_SEPARATOR, $path);

    return strrev(DS.$path[1].DS);
}


/**
 * defining the root directory
 *
 */


 define("ROOT", root());


/*
 * Define paths to directories
 */
 
 
 if(version_compare(PHP_VERSION, "7.0.0", "<")){

 }else{
   define("core", "../Core/");
   define("app", [
    "con" => "../App/Controllers/",
    "mod" => "../App/Models/",
    "view" => "../App/views/",
   ]);
 }
 

 /*
  * Define Default template
  */

 
 define('TEMPLATE', '../App/views/templates/master_layout');

 
 /*
  * Define default title
  */
 
 
 define('TITLE', 'Sunshine High');
 
 

/*
 * Define allowed paths
 */
define('ALLOWED_PATHS', ['Home','Dashboard','Auth']);


/*
 * Call the autoloader
 */


include_once 'autoloader.php';


/*
 * Loading site helper functions
 */


include_once 'functions.php';

/*
 * Set/Save Session Handler;
 */
