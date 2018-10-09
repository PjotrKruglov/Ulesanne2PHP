<?php

class couse {

    private $code;
    private $name;
    private $size;
    private $arv_eks;
    private $students;

    public function __construct($code = null, $name = null, $size = null, ) {
        parent::__construct($lastname, $firstname);
        $this->group=$group;
    }
    
    public function __toString() {
        return parent::__toString()." - ".$this->group;
    }

    public function printInfo() {
        echo "<p>". nl2br($this->__toString())."<p>";
    }
}