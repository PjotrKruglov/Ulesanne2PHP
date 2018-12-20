<?php

require_once 'model/Student.php';

class StudentFindDataImpl implements FindData {
    private $listStudents = array();
    private $listStudentsFinal = array();

    public function __construct() {
        $file = fopen("Students.csv", "rt") or die("Error");
        for ($i = 0; $data = fgetcsv($file, 100, ";"); $i++) {
            $student = new Student($data[0], $data[1], $data[2]);
            $this->listStudents[] = $student;
        } // konstruktor andmete lugemisega
    }

    public function findAll() {
        return $this->listStudents; // find all meetod
    }

    public function findByCourse($course) {
        foreach ($this->listStudents as $student) {
            if($student->getCourse()==$course)
                $this->listStudentsFinal[] = $student;
        }
        return $this->listStudentsFinal; // otsing kursuse järgi
    }
}
?>