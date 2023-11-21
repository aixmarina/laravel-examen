<?php

namespace App\Models;

class Industrial extends Robot{

    private int $maximumLoad;

    public function __construct(string $name = '', string $functionality = '',
    string $speed = '', string $material = '', $maximumLoad){
        parent::__construct($name, $funcionality, $speed, $material);
        $this->maximumLoad = $maximumLoad;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
}