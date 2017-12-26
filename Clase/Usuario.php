<?php


class Usuario {
  private $id_usuario;
  private $nombre;
  private $calve;
  private $Tipo_usuario;
  
  function __construct($id_usuario, $nombre, $calve, $Tipo_usuario) {
      $this->id_usuario = $id_usuario;
      $this->nombre = $nombre;
      $this->calve = $calve;
      $this->Tipo_usuario = $Tipo_usuario;
  }

  
  function getId_usuario() {
      return $this->id_usuario;
  }

  function getNombre() {
      return $this->nombre;
  }

  function getCalve() {
      return $this->calve;
  }

  function getTipo_usuario() {
      return $this->Tipo_usuario;
  }

  function setId_usuario($id_usuario) {
      $this->id_usuario = $id_usuario;
  }

  function setNombre($nombre) {
      $this->nombre = $nombre;
  }

  function setCalve($calve) {
      $this->calve = $calve;
  }

  function setTipo_usuario($Tipo_usuario) {
      $this->Tipo_usuario = $Tipo_usuario;
  }



}
