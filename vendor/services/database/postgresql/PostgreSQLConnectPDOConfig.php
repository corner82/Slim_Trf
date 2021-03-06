<?php
/**
 * OSB İMALAT Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2015 OSB İMALAT (http://www.uretimosb.com)
 * @license   
 */
namespace Services\Database\Postgresql;

/**
 * class for PDO postgreSQl connect variables
 */
class PostgreSQLConnectPDOConfig {
    
    /**
     * PDO connection configuration options,
     * @var array
     */
    public static $config = array(
            /*\PDO::ATTR_PERSISTENT => true*/);
    
    /**
     * returns static config array
     * @return array | null
     */
    public static function getConfig() {
        return self::$config;
    }
    
    
}

