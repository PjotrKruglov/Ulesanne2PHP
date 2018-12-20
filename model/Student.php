<?php

class Student extends Person {

    private $course; // lisa parameeter

    public function __construct($lastname = null, $firstname = null, $course = null) {
        parent::__construct($lastname, $firstname);
        $this->course=$course; // konstruktor
    }
    
    public function __toString() { // printimis meetodid
        return parent::__toString().", ".$this->course;
    }

    public function printInfo() {
        echo "<p>". nl2br($this->__toString())."<p>";
    }

    public function getCourse() { // get/set meetodid
        return $this->course;
    }

    public function setCourse($course) {
        $this->course = $course;
    }
}
?>