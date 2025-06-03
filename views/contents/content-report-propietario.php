<!-- content-report-propietario.php -->
<h1>Reporte de Propietarios</h1>
<table border="1" cellspacing="0" cellpadding="5" style="width:100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color:#f2f2f2;">
            <th>ID</th>
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>Nombre Completo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listaPropietarios as $propietario): ?>
        <tr>
            <td><?= htmlspecialchars($propietario->getIdpropietario()) ?></td>
            <td><?= htmlspecialchars($propietario->getApellidos()) ?></td>
            <td><?= htmlspecialchars($propietario->getNombres()) ?></td>
            <td><?= htmlspecialchars($propietario->getNombreCompleto()) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
