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



#\Core\Security\Cookie::set('name', 'Amolo Caleb', (time()+3600*60*60));


/*
$t = Core\DB::instance();
$k = $t->query('SELECT `*` FROM users WHERE id=:id',['id'=>2]);
$k->results(PDO::FETCH_ASSOC);
$m = $t->getResult();
echo $m['users_name'].'<br><hr>';
dnd($t->getResult());
*/