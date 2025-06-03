<?php

require_once '../models/Mascota.php';

$mascota = new Mascota();

require_once '../models/Mascota.php';

$mascota = new Mascota();

$parametro = [
  "idpropietario" => 1,
  "tipo" => "Perro",
  "nombre" => "Max",
  "color" => "Negro",
  "genero" => "si", 
  "idmascota" => 8
];

$num = $mascota->update($parametro);
var_dump($num);
