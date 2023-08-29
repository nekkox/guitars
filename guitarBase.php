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

    public function search(Builder $builder, MODEL $model, Type $type, Wood $frontWood, Wood $backWood): void
    {

        foreach ($this->guitars as $guitar) {
            if (($guitar->getSpec()->getType() === $type->value || $type->value === "ANY") &&
                ($guitar->getSpec()->getBuilder() === $builder->value || $builder->value === "ANY") &&
                ($guitar->getSpec()->getModel() === $model->value || $model->value === "ANY") &&
                ($guitar->getSpec()->getFrontWood() === $frontWood->value || $frontWood->value === "ANY") &&
                ($guitar->getSpec()->getBackWood() === $backWood->value || $backWood->value === "ANY")

            ) {
                $this->searchedGuitars[] = $guitar;

            }

        }
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