<?php
$carros = [
    ["marca" => "Honda", "modelo" => "Civic", "ano" => 2018],
    ["marca" => "Toyota", "modelo" => "Corolla", "ano" => 2014],
    ["marca" => "VW", "modelo" => "Gol", "ano" => 2016],
];

foreach ($carros as $carro) {
    if ($carro["ano"] >= 2015) {
        echo $carro["marca"] . " " . $carro["modelo"] . " - " . $carro["ano"] . "\n";
    }
}
