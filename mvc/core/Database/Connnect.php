<?php 
namespace core\Database; 
use PDO;
use ErrorException;
class Connection {
    public static function Connect($config) {
      try {
        return new PDO(
            $config['connection'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'],
            $config['username'],
            $config['password'],
            $config['options']
        );
      } catch (\PDOException $e) {
        die($e->getMessage());
      }
    }
}


