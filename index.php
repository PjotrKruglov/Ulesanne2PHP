<?php
require_once 'model/course.php';
require_once 'service/findData.php';
require_once 'service/courseFindDataImpl.php';

$course = new course();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Courses</title>
</head>
<body>
    <div class="sidenav">
    <h2 >SELECT COURSE</h2>
        <?php
                $data=new courseFindDataImpl;
                foreach ($data->findAll() as $course) {
                    print "<a href=result.php?name=".$course->getCode().">" .$course->getCode(). ' ' .$course->getName(). "</a>";
                }
            ?>
    </div>
    <div class="main">
    </div>
</body>
</html>