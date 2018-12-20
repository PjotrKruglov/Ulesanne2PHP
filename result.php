<?php
require_once 'model/course.php';
require_once 'model/person.php';
require_once 'model/Student.php';
require_once 'service/findData.php';
require_once 'service/courseFindDataImpl.php';
require_once 'service/studentFindDataImpl.php';
$code = $_GET['name'];
$cour = new course();
$student = new Student();
$rightCourse = new course();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="sidenav">
    <h2>SELECT COURSE</h2>
        <?php
                $data=new courseFindDataImpl;
                foreach ($data->findAll() as $cour) {
                    echo "<a href=result.php?name=".$cour->getCode().">" .$cour->getCode(). ' ' .$cour->getName(). "</a>";
                    if ($code == $cour->getCode())
                        {
                            $rightCourse = $cour;
                    }
                }
            ?>
    </div>
    <div class="main">
    <?php
        echo "<h2>".$rightCourse->getCode().' '.$rightCourse->getName().'. Suurus: '.$rightCourse->getSize().' EAP. Arvestus: '.$rightCourse->getArv_eks()."</h2>";
        $data2=new studentFindDataImpl;
        foreach ($data2->findAll() as $student) {
            if ($student->getCourse() == $rightCourse->getCode())
                    {
                        echo $student->printInfo();
                }
        }
    ?>
    </div>
</body>
</html>