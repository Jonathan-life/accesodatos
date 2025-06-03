<?php

require_once '../entities/Mascota.entidad.php';
require_once '../models/Mascota.php';

//ENTIDAD = CONTENEDOR DATOS

$entidad = new MascotaEntidad();
$entidad->__SET('idpropietario', 1);
$entidad->__SET('tipo', 1);
$entidad->__SET('nombre', 1);
$entidad->__SET('color', 1);
$entidad->__SET('genero', 1);

//modelo = accion/logica
$mascota = new Mascota();
$idgenerado = $mascota->create($entidad);
var_dump($idgenerado);