<?php

/**
 * Description of index
 * Created on : Jun 16, 2018, 11:26:26 AM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */


include_once '../helpers/config.php';

(new Core\Router)->dispatch();
\Core\Security\Session::set(['token' => \Core\Security\Security::XSRFTokenGenerator()]);

