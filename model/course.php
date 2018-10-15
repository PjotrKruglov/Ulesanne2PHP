<?php

class couse {

    private $code;
    private $name;
    private $size;
    private $arv_eks;

    public function __construct($code = null, $name = null, $size = null, $arv_eks = null) {
        $this->group=$group;
    }
    
    public function __toString() {
        return $this->group;
    }

    public function printInfo() {
        echo "<p>". nl2br($this->__toString())."<p>";
    }
}