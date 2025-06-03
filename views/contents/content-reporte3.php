<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    table{
      width: 100px;
      border-collapse: collapse;
    }
    thead th{
      background-color: aliceblue;
    }
    td, th{
      border: .5px solid black;
      padding: 5px;
    }
  </style>
  <div>
  <table>
    <colgroup>
    <col style="width: 10%">
    <col style="width: 30%;">
    <col style="width: 15%;">
    <col style="width: 15%;">
    <col style="width: 10%;">
    <col style="width: 20%;">  
  </colgroup>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre mascota</th>
        <th>Tipo</th>
        <th>COlor</th>
        <th>Genero</th>
        <th>Propietario</th>
      </tr>
    </thead>
    <tbody>

<?php foreach($listaMascotas as $mascota): ?>
  <tr>
    <td><?= $mascota->idmascota ?></td>
    <td><?= $mascota->nombre ?></td>
    <td><?= $mascota->color ?></td>
    <td><?= $mascota->genero ?></td>
    <td><?= $mascota->propietario ?></td>
  </tr>
<?php endforeach ?>

    </tbody>
  </table>
</div>
</body>
</html>