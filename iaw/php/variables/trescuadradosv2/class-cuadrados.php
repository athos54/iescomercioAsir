<?php

class Cuadrado{
    public $tamanoCuadrado="";
    public $cuadradoRojo="";
    public $cuadradoVerde="";
    public $cuadradoAzul="";
    public $colorCuadrado="";
    public $posicionCuadrado="";

    function __construct(){
      $this->tamanoCuadrado=rand(50,150);
      $this->cuadradoRojo=rand(0,255);
      $this->cuadradoVerde=rand(0,255);
      $this->cuadradoAzul=rand(0,255);
      $this->colorCuadrado="rgb($this->cuadradoRojo,$this->cuadradoVerde,$this->cuadradoAzul)";
    }
}
