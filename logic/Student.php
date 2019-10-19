<?php

class Student {
    private $code;
    private $name;
    private $last_name;
    private $birth;
    private $genre;
    private $town_origin;
    private $inst_email;
    private $perso_email;
    private $cellphone;

    function __construct($code, $name, $last_name, $birth, $genre, $town_origin, $inst_email, $perso_email, $cellphone) {
        $this->code = $code;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->birth = $birth;
        $this->genre = $genre;
        $this->town_origin = $town_origin;
        $this->inst_email = $inst_email;
        $this->perso_email = $perso_email;
        $this->cellphone = $cellphone;
    }

    /**
     * @return mixed
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code) {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getBirth() {
        return $this->birth;
    }

    /**
     * @param mixed $birth
     */
    public function setBirth($birth) {
        $this->birth = $birth;
    }

    /**
     * @return mixed
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getTownOrigin() {
        return $this->town_origin;
    }

    /**
     * @param mixed $town_origin
     */
    public function setTownOrigin($town_origin) {
        $this->town_origin = $town_origin;
    }

    /**
     * @return mixed
     */
    public function getInstEmail() {
        return $this->inst_email;
    }

    /**
     * @param mixed $inst_email
     */
    public function setInstEmail($inst_email) {
        $this->inst_email = $inst_email;
    }

    /**
     * @return mixed
     */
    public function getPersoEmail() {
        return $this->perso_email;
    }

    /**
     * @param mixed $perso_email
     */
    public function setPersoEmail($perso_email) {
        $this->perso_email = $perso_email;
    }

    /**
     * @return mixed
     */
    public function getCellphone() {
        return $this->cellphone;
    }

    /**
     * @param mixed $cellphone
     */
    public function setCellphone($cellphone) {
        $this->cellphone = $cellphone;
    }


}