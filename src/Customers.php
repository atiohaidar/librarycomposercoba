<?php
namespace Tio\Belajar;
class Customer{
    public function __construct(private string $name){
        echo "ini adalah class " . __CLASS__;
    }
    public function mengatakanHallo($guest){

        echo "Hallo dari " . __CLASS__. " nama saya adalah $this->name. kamu adalah $guest";
    }
}