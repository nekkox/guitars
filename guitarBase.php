<?php

class guitarBase
{

    private $guitars = array();
    private array $searchedGuitars;

    public function addGuitar(Giutar $guitar): void
    {
        $this->guitars[] = $guitar;
    }

    public function showAllGuitars(): void
    {
        echo "Available Guitars: ";
        if ($this->guitars) {
            echo '<div><ol>';
            foreach ($this->guitars as $guitar) {
                echo '<li>' . $guitar . '</li>';
                echo '<br>';
            };
            echo '</ul></div>';
        } else {
            echo "Sorry, no Guitars";

        }


    }

    public function search(GuitarSpec $searchSpec): array
    {
        $matchingGuitars = array();

        foreach ($this->guitars as $guitar) {
           $spec = $guitar->getSpec();

            if($spec->matches($searchSpec)) {
                $matchingGuitars[] = $guitar;
            }
        }
        return $matchingGuitars;
    }

    public function seachResult(): array|bool
    {
        if (empty($this->searchedGuitars)) {
            echo "Sorry, no Guitars found";
            return false;
        } else {
            return $this->searchedGuitars;
        }
    }
}