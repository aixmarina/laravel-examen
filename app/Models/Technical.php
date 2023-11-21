<?php

namespace App\Models;

class Technical{

    public function __construct(
        private string $name = '',
        private string $email = '',
        private string $password = ''){}

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
}