<?php

enum Wood: string
{
    case MAPLE = 'MAPLE';
    case MAHOGANY = 'MAHOGANY';
    case BRAZILIAN_ROSEWOOD = 'BRAZILIAN ROSEWOOD';
    case HEBAN = 'HEBAN';
    case OAK = 'OAK';
    case ANY = 'ANY';

    public function getBuilder(): String {

        return strtolower($this->value);


    }

}
