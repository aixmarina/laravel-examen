<?php

namespace App\Models;

class Robot{

    public function __construct(
        private string $name = '',
        private string $functionality = '',
        private int $speed = '',
        private string $material = ''){}

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
}