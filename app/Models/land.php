<?php

namespace App\Models;
use App\Models\Maintenance;


class Land extends Robot{

    private string $autonomy;
    private string $wheels;

    public function __construct(string $name = '', string $functionality = '',
    string $speed = '', string $material = '', $autonomy, $wheels){
        parent::__construct($name, $funcionality, $speed, $material);
        $this->autonomy = $autonomy;
        $this->wheels = $wheels;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
}