<?php
class User {
    private $category, $id, $code, $name, $price;
    public function __construct($category, $code, $name, $price) {
        $this->category = $category;
        $this->code = $code;
        $this->name = $name;
        $this->price = $price;
    }
    public function getCategory() {
        return $this->category;
    }
    public function setCategory($value) {
        $this->category = $value;
    }
    public function getID() {
        return $this->id;
    }
    public function setID($value) {
        $this->id = $value;
    }
    public function getCode() {
        return $this->code;
    }
    public function setCode($value) {
        $this->code = $value;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($value) {
        $this->name = $value;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getPriceFormatted() {
        $formatted_price = number_format($this->price, 2);
        return $formatted_price;
    }
    public function setPrice($value) {
        $this->price = $value;
    }
}
?>