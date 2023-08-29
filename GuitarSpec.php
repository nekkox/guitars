<?php

class GuitarSpec
{
    private Builder $builder;
    private Model $model;
    private Type $type;
    private Wood $frontWood;
    private Wood $backWood;



    public function __construct(Builder $builder, Model $model, Type $type, Wood $frontWood, Wood $backWood){
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->frontWood = $frontWood;
        $this->backWood = $backWood;

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



}