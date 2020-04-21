<?php
  class Database{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'users';
    private $dbh; //dbhandler
    private $error; //assigned all errors
    private $stmt;

    public function __construct(){

      // Set DSN(Data Source Name)
      $dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;

      // Set Options
      $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );

      // Create new PDO
      try {
        //create database handle($this->dbh)
        $this->dbh = new PDO($dsn, $this->user, $this->pass,
        $options);
      }
      catch(PDOEception $e){
        $this->error = $e->getMessage();
      }
    }

    public function query($query){
      $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null){
      if(is_null($type)){
        switch(true){
          case is_int($value):
            $type = PDO::PARAM_INT;
            break;
          case is_bool($value):
            $type = PDO::PARAM_BOOL;
            break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
          default:
            $type = PDO::PARAM_STR;
          }
      }
      $this->stmt->bindValue($param, $value, $type);
    }

    //to execute prepared statements
    public function execute(){
      return $this->stmt->execute();
    }

    //to select records from database
    public function resultset(){
      $this->execute();
      // retrieve the resultset in the form of an associative array
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //execute function lastInserted Id
    public function lastInsertId(){
      $this->dbh->lastInsertId();
    }
  }
?>
