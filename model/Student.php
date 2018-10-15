<?php

class Student extends Person {

    private $course;

    public function __construct($lastname = null, $firstname = null, $course = 'RDIR') {
        parent::__construct($lastname, $firstname);
        $this->course=$course;
    }
    
    public function __toString() {
        return parent::__toString();
    }

    public function printInfo() {
        echo "<p>". nl2br($this->__toString())."<p>";
    }

    public function getCourse() {
        return $this->course;
    }
}