<?php

enum Type: string
{
    case ACOUSTIC = 'ACOUSTIC';
    case ELECTRIC = 'ELECTRIC';
    case ANY = 'ANY';

    public function getBuilder(): String {

        return strtolower($this->value);


    }



}