<?php
namespace Circle;
class UserCircle {
    private $x;
    private $y;
    private $radius;

    // Конструктор
    public function __construct($x, $y, $radius) {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    // Метод __toString()
    public function __toString() {
        return "Коло з центром в ($this->x, $this->y) і радіусом $this->radius";
    }

    // Методи GET і SET для координати X
    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }

    // Методи GET і SET для координати Y
    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }

    // Методи GET і SET для радіуса
    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function intersects(UserCircle $otherCircle) {
        $distance = sqrt(pow($this->x - $otherCircle->getX(), 2) + pow($this->y - $otherCircle->getY(), 2));
        $sumOfRadii = $this->radius + $otherCircle->getRadius();

        // Перевірка, чи відстань між центрами менша за суму радіусів
        // Якщо так, кола перетинаються
        // Якщо ні, кола не перетинаються
        return $distance < $sumOfRadii;
    }
}