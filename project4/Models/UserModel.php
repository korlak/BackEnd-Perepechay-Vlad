<?php
namespace Models;

/**
 * Дії з функціями: Lenght
 * @param UserModel
 * 
 * 
 */
class UserModel {
    protected string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    /**
     * Виводить довжину рядка
     * @param string $name
     */
    public function stringLenght($name) : void{
        //echo strlen($name);
        echo $name;
    }
}