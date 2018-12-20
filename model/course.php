<?php

class course {

    private $code;
    private $name;
    private $size;
    private $arv_eks; // parameetrid

    public function __construct($code = null, $name = null, $size = null, $arv_eks = null) {
        $this->code=$code;
        $this->name=$name;
        $this->size=$size;
        $this->arv_eks=$arv_eks; // konstruktor
    }
    
    public function __toString() { // printimis meetodid
        return $this->code. " " .$this->name. " " .$this->size. " " .$this->arv_eks;
    }

    public function printInfo() {
        echo "<p>". nl2br($this->__toString())."<p>";
    }

    public function getCode() { // get/set meetodid
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size;
    }

    public function getArv_eks() {
        return $this->arv_eks;
    }

    public function __destruct() {
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function setarv_eks($arv_eks) {
        $this->arv_eks = $arv_eks;
    }
}
?>