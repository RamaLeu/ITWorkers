<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php

use ITApp\ITWorker;
use ITApp\Manager;
use ITApp\Render;
use ITApp\Programmer;
use ITApp\Tester;


$manager1 = new Manager('John', 'Smith', 800, 'Main', 3, "Programmers");
$programmer1 = new Programmer('جوناس', 'مطور', 5, 'Visual Design', "<1", "Level Designer");
$tester1 = new Tester('Sarah', 'Proctor', 650, 'Low', "Eats a lot", 2);

$manager1->addExtra("Good guy");
$programmer1->addExtra("Cannot remember functions");
$tester1->addExtra("Good at teamwork");
?>
<div class="tables">
<table>
    <tr><td><img  src="images/manager.jpeg"></td></tr>
    <?php Render::Show($manager1->showWorker()); ?>
</table>
<table>
    <tr><td><img src="images/programmer.jpg"></td></tr>
    <?php Render::Show($programmer1->showWorker()); ?>
</table>
<table>
    <tr><td><img src="images/tester.jpg"></td></tr>
    <?php Render::Show($tester1->showWorker()); ?>
</table>
</div>
</body>
</html>