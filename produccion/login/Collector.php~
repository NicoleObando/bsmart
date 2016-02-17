<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-204-5-56.compute-1.amazonaws.com");
define("DB_USER", "dtbkhqgldsxkfo");
define("DB_PASS", "MpT9m4lu-kNvwMzvwoWFKnoQHf");
define("DB_NAME", "d16qbftkvubl8l");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
