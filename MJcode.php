<?php

class MJcode{
    private $id;
    private $name;
    private $email;
    private $message;
    private $phone;
    private $clock;
    private $connect;

    private static $instance;
    
    const USERNAME = 'root';
    const PASSWORD = 'root';
   

    public function __construct($name, $email, $message, $phone, $clock)
    {
        $this->name    = $name;
        $this->email   = $email;
        $this->message = $message;
        $this->phone   = $phone;
        $this->clock   = $clock;
    }

    private static function getConnection()
    {
        $DB_NAME = 'mjcode';
        $SERTVER_NAME = 'localhost';

        if(!isset(self::$instance)){
            self::$instance = new PDO("mysql:host=$SERTVER_NAME;dbname=$DB_NAME", self::USERNAME, self::PASSWORD);
        }
        return self::$instance;
    }

    public function insertContact()
    {
        $query = "INSERT INTO contact(name, email, message, phone, clock) VALUES (?,?,?,?,?)";
        $stmt = MJcode::getConnection()->prepare($query);
        $stmt->bindValue(1,$this->name);
        $stmt->bindValue(2,$this->email);
        $stmt->bindValue(3,$this->message);
        $stmt->bindValue(4,$this->phone);
        $stmt->bindValue(5,$this->clock);
        return $stmt->execute();
    }
}