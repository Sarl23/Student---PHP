<?php
include('Student.php');


class Management {
    private $student;

    /**
     * Management constructor.
     * @param $student
     */
    public function __construct() {
        $this->student = array();
        $this->loadStudents();
    }

    function loadStudents() {

        $url = ("./resources/archivo.json");
        $file = fopen($url, "r");
        $content = fread($file, filesize($url));
        $content = json_decode($content, true);

        foreach ($content as $cont) {
            $student = new Student($cont['code'], $cont['name'], $cont['last_name'], $cont['birth'],
                $cont['genre'], $cont['town_origin'], $cont['inst_email'], $cont['perso_email'], $cont['cellphone']);
            $urlStudent = "./resources/archivo.json";
            $fileStud = fopen($urlStudent, 'r');
            $contentStudent = fread($fileStud, filesize($urlStudent));
            $contentStudent = json_decode($contentStudent, true);


            array_push($this->student, $student);
        }


    }

    function getStudents() {
        $results = array();
        foreach ($this->student as $stud) {
            array_push($results, ['code' => $stud->getCode(), 'name' => $stud->getName(), 'last_name' => $stud->getLastName(), 'birth' => $stud->getBirth(), 'genre' => $stud->getGenre(),
                'town_origin' => $stud->getTownOrigin(), 'inst_email' => $stud->getInstEmail(), 'perso_email' => $stud->getPersoEmail(), 'cellphone' => $stud->getCellphone()]);
        }
        return $results;
    }

    function addStudent($code, $name, $last_name, $birth, $genre, $town_origin, $inst_email, $perso_email, $cellphone) {
        $addStu= array();
        array_push($this->student,new Student($code, $name, $last_name, $birth, $genre, $town_origin, $inst_email, $perso_email, $cellphone));

        return $addStu;


    }


    function clearStudent($code) {

    }

    function findStudent() {

    }


}