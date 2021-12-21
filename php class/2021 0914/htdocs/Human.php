<?php

class Human {
    public $name;
    public $hobbies = [];

    public function setHobby(string $hobby) {
        $this->hobbies[] = $hobby;
    }


    public function setName(string $name) {
        $this->name = $name;
    }


    public function hasHobby(string $hobby) {
        return in_array($hobby, $this->hobbies);
    }

};