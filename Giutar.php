<?php
//include "GuitarSpec.php";
class Giutar
{
 private String $serialNumber;
 private float $price;
 private GuitarSpec $spec;

 public function __construct(String $serialNumber,Float $price, GuitarSpec $spec)
 {
     $this->serialNumber = $serialNumber;
     $this->price = $price;
     $this->spec = $spec;
 }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return String
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    /**
     * @return GuitarSpec
     */
    public function getSpec(): GuitarSpec
    {
        return $this->spec;
    }

    /**
     * @param GuitarSpec $spec
     */
    public function setSpec(GuitarSpec $spec): void
    {
        $this->spec = $spec;
    }

    public function __toString(): string
    {
        return 'Serial Number: '. $this->serialNumber . '<br>'. 'Price: $' . $this->price;
    }


}