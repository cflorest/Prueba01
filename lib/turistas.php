<?php

class Turistas {

    private $name;
    private $email;
    private $souceRegion;
    private $EnglishLenguage;
    private $chekIn;
    private $chekOut;
    private $comentario;
    
    function __construct($name, $email, $souceRegion, $EnglishLenguage, $chekIn, $chekOut, $comentario) {
        $this->name = $name;
        $this->email = $email;
        $this->souceRegion = $souceRegion;
        $this->EnglishLenguage = $EnglishLenguage;
        $this->chekIn = $chekIn;
        $this->chekOut = $chekOut;
        $this->comentario = $comentario;
    }
    
    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getSouceRegion() {
        return $this->souceRegion;
    }

    function getEnglishLenguage() {
        return $this->EnglishLenguage;
    }

    function getChekIn() {
        return $this->chekIn;
    }

    function getChekOut() {
        return $this->chekOut;
    }

    function getComentario() {
        return $this->comentario;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSouceRegion($souceRegion) {
        $this->souceRegion = $souceRegion;
    }

    function setEnglishLenguage($EnglishLenguage) {
        $this->EnglishLenguage = $EnglishLenguage;
    }

    function setChekIn($chekIn) {
        $this->chekIn = $chekIn;
    }

    function setChekOut($chekOut) {
        $this->chekOut = $chekOut;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }



}
