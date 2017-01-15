<!DOCTYPE html>
<!--
Author: Aing Ragunathan 
Date:    2017/01/12

COMP 4711 Internet Software Dev
Lab 1
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('Student.php');

            #create an array of students, add 2 students and myself
            $students = array();
            
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            $second = new Student();
            $second->surname = "Aing";
            $second->first_name = "Ragunathan";
            $second->add_email('home','aragunathan@bcit.com');
            $second->add_grade(80);
            $second->add_grade(85);
            $second->add_grade(60);
            $students['a00756949'] = $second;
            
            #sort the students to make the list look better
            ksort($students);

            #print out the list of students
            foreach($students as $student)
                echo $student->toString();
        ?>  
    </body>
</html>
