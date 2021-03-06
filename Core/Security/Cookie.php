<?php

namespace Core\Security;

/**
 * Description of Cookie
 * Created on : Jul 4, 2018, 4:49:06 PM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */
class Cookie {

    public static function set($cookie,$value,$expire,$path = '/') {
        
        if (!isset($_COOKIE[$cookie])) {
            
            setcookie($cookie, $value, $expire,$path);
            
        }
        
        
    }
    
    public static function get($cookie) {
        
        if (self::exists($cookie)) {
            
            return $_COOKIE[$cookie];
            
        }
        
        return false;
        
    }
    
    public static function exists($cookie) {
        
        return (bool) isset($_COOKIE[$cookie]);
        
    }
    
    public static function destroy($cookie) {
        
        if (self::exists($cookie)) {
            
            unset($_COOKIE[$cookie]);
            
        }
        
      }
}
