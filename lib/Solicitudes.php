<?php

class Solicitudes{
    private $rut;
    private $nombre;
    private $tipoAtencion;
    private $fechaAtencion;
    private $nombreEspecialista;
    private $comentario;
    
    function __construct($rut, $nombre, $tipoAtencion, $fechaAtencion, $nombreEspecialista, $comentario) {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->tipoAtencion = $tipoAtencion;
        $this->fechaAtencion = $fechaAtencion;
        $this->nombreEspecialista = $nombreEspecialista;
        $this->comentario = $comentario;
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTipoAtencion() {
        return $this->tipoAtencion;
    }

    function getFechaAtencion() {
        return $this->fechaAtencion;
    }

    function getNombreEspecialista() {
        return $this->nombreEspecialista;
    }

    function getComentario() {
        return $this->comentario;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTipoAtencion($tipoAtencion) {
        $this->tipoAtencion = $tipoAtencion;
    }

    function setFechaAtencion($fechaAtencion) {
        $this->fechaAtencion = $fechaAtencion;
    }

    function setNombreEspecialista($nombreEspecialista) {
        $this->nombreEspecialista = $nombreEspecialista;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

}