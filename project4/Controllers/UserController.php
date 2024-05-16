<?php
namespace Controllers;
/**
 * Дії з функціями: Shuffle
 * @param UserController
 */
class UserController
{
    protected string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    /**
     * Перемішка елементів 
     * @param string $name
     */
    public function stringShuffle(string $name) : void
    {
        echo str_shuffle($name);
    }
}
