<?php
require "functions.php";
spl_autoload_register('my_autoloader');


$spec1 = new GuitarSpec(Builder::COLLINGS,MODEL::F11,Type::ELECTRIC,Wood::OAK, Wood::MAPLE);
$spec2 = new GuitarSpec(Builder::FENDER,MODEL::P45,Type::ACOUSTIC,Wood::HEBAN, Wood::MAHOGANY);

$guitar1 = new Giutar('32344',34.222,$spec1);
$guitar2 = new Giutar('66744',55.3,$spec2);
$base = new guitarBase();
$base->showAllGuitars();
echo '<br>';
$base->addGuitar($guitar1);
$base->addGuitar($guitar2);
echo '<br>';
$base->showAllGuitars();
echo '<br>';



$base->search(Builder::FENDER, MODEL::ANY, Type::ANY,Wood::ANY,Wood::ANY );
var_dump($base->seachResult());