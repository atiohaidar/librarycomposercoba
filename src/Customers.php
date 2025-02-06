<?php
use Tio\Belajar;
class Customer{
    public function __construct(private string $name){
        echo "ini adalah class " . __CLASS__;
    }
    public function mengatakanHallo(){

        echo "Hallo dari " . __CLASS__. " nama saya adalah $this->name";
    }
}