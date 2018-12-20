<?php

abstract class Person {

    private static $count = 0;
    private $id;
    private $lastname;
    private $firstname; // parameetrid
    
    abstract public function printInfo();

    public function __construct($lastname = null, $firstname = null) {
        $this->id = ++self::$count;
        $this->lastname = $lastname;
        $this->firstname = $firstname; // konstruktor
    }

    public function __destruct() { // destruktor
        $this->id = self::$count--;
    }

    public static function getCount() {
        return self::$count;
    }

    public function __toString() { // printimis meetod
        return $this->firstname. " " .$this->lastname;
    }

    public function getId() { // get/set meetodid
        return $this->id;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }
}
?>