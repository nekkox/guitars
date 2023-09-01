<?php

class GuitarSpec
{
    private Builder $builder;
    private Model $model;
    private Type $type;
    private Wood $frontWood;
    private Wood $backWood;
    private int $numStrings;



    public function __construct(Builder $builder, Model $model, Type $type, Wood $frontWood, Wood $backWood, int $numStrings){
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->frontWood = $frontWood;
        $this->backWood = $backWood;
        $this->numStrings = $numStrings;

    }

    public function getType(){
        return $this->type->value;
    }

    public function getBuilder(){
        return $this->builder->value;
    }

    public function getModel(){
        return $this->model->value;
    }

    public function getFrontWood(){
        return $this->frontWood->value;
    }

    public function getBackWood(){
        return $this->backWood->value;
    }

    /**
     * @return int
     */
    public function getNumStrings(): int
    {
        return $this->numStrings;
    }

    public function matches(GuitarSpec $otherSpec) : bool{

        if (($this->type->value === $otherSpec-> type->value || $otherSpec->type->value === "ANY") &&
            ($this->builder->value === $otherSpec-> builder->value || $otherSpec->builder->value === "ANY") &&
            ($this->model->value === $otherSpec-> model->value || $otherSpec->model->value === "ANY") &&
            ($this->frontWood->value === $otherSpec-> frontWood->value || $otherSpec->frontWood->value === "ANY") &&
            ($this->backWood->value === $otherSpec-> backWood->value || $otherSpec->backWood->value === "ANY")
        ){
            return true;
        }


        return false;

    }



}