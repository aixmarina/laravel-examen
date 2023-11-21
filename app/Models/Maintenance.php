<?php

namespace App\Models;

trait Maintenance{
    public function reviewRobot(Technical $technical){
        $array1 = $technical->__serialize();
        $array2 = $this->__serialize();
        $combine=[$array2, $array1];
        $revision = new class (){};
        $result = rand();
    }

    public function __serialize(): array {
        return ["name" => $this->name, 
                 "email" => $this->email,
                 "password" => $this->password];
    }
}