<?php
class ia
{
//Declaracion de una propiedad
public $columna = '1';
public $fila = '3';

// Declaracion de un metodo
public function getFila() {
  return $this->fila;
}
public function getColumna() {
  return $this->columna;
}

//Setters
public function setFila($fil) {
  $this->fila = $fil;

  if ($fil>3){
  	$this->fila = 3;
  }elseif ($fil<0) {
  	$this->fila = 0;
  }else {
  	$this->fila = $fil;
  }
}
public function setColumna($col) {
  $this->columna = $col;

  if ($col>3){
  	$this->columna = 3;
  }elseif ($col<0) {
  	$this->columna = 0;
  }else {
  	$this->columna = $col;
  }
}

// Random
public function RandomPos() {
$this->fila=rand(0,3);
$this->columna=rand(0,3);
}
}
?>
