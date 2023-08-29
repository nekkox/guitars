<?php

enum Builder: string
{
    case FENDER = 'FENDER';
    case MARTIN = 'MARTIN';
    case GIBSON = 'GIBSON';
    case COLLINGS = 'COLLINGS';
    case ANY = 'ANY';

public function getBuilder(): String {

    return strtolower($this->value);


}

}
