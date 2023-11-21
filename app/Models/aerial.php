<?php

namespace App\Models;
use App\Models\Maintenance;

class Aerial extends Robot{

    private string $autonomy;
    private string $power_unit;

    public function __construct(string $name = '', string $functionality = '',
    string $speed = '', string $material = '', $autonomy, $power_unit){
        parent::__construct($name, $funcionality, $speed, $material);
        $this->autonomy = $autonomy;
        $this->power_unit = $power_unit;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
}