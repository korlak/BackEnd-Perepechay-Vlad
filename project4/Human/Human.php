<?php
namespace Human;
abstract class Human implements HouseCleaning {
    protected $height;
    protected $weight;
    protected $age;
    public function birthMessage() {
        echo "Студент народив дитину!\n";
    }
    public function cleanRoom() {
        echo get_class($this) . " прибирає кімнату\n" . "<br>";
    }

    public function cleanKitchen() {
        echo get_class($this) . " прибирає кухню\n"  . "<br>";
    }
    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}