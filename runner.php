<?php
include('./logic/Management.php');
$managemet =new Management();
echo "ANTES DE AÑADIR";
echo "_____________________________________________";
echo json_encode($managemet->getStudents());
echo " AÑADIR";
echo "_____________________________________________";
json_encode($managemet->addStudent("11","ANDRES","Rojas","23-05-1998","Masculino","STA","sergio.rojas04@uptc.edu.co","sergioandres@sdasd","33322212311"));
json_encode($managemet->addStudent("18","Rojas","RRRRR","23-05-1998","Masculino","STA","sergio.rojas04@uptc.edu.co","sergioandres@sdasd","33322212311"));
json_encode($managemet->addStudent("18","carlos","sanchez","13-05-1997","Masculino","STA","sergio.rojas04@uptc.edu.co","sergioandres@sdasd","33322212311"));
echo "DESPUES DE AÑADIR";
echo "_____________________________________________";
echo json_encode($managemet->getStudents());



