<?php
namespace Views;
/**
 * Дії з функціями: Reverse
 * 
 */
class UserView {
    protected string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    /**
     * Перевертає рядок
     * @param string $name
     */
    public function stringReverse(string $name) : void{
        echo strrev($name);
    }
}