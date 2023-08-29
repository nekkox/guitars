<?php

enum MODEL: string
{
    case F11 = 'F11';
    case P45 = 'P45';
    case ANY = 'ANY';

    public function getBuilder(): String {

        if(!$this->value === 'ANY'){
            return strtolower($this->value);
        }

        return $this->value;


    }

}