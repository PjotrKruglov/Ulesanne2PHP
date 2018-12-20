<?php

require_once 'model/course.php';

class courseFindDataImpl implements FindData {
    private $listCourses = array();

    public function __construct() {
        $file = fopen("Groups.csv", "rt") or die("Error");
        for ($i = 0; $data = fgetcsv($file, 100, ";"); $i++) {
            $course = new Course($data[0], $data[1], $data[2], $data[3]);
            $this->listCourses[] = $course;
        } // konstruktor andmete lugemisega
    }

    public function findAll() {
        return $this->listCourses; // find all meetod
    }
}