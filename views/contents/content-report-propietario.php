<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #666;
        padding: 8px;
        text-align: left;
    }
</style>

<h1>Reporte de Propietarios</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listaPropietarios as $prop) : ?>
            <tr>
                <td><?= $prop['id'] ?></td>
                <td><?= $prop['nombre'] ?></td>
                <td><?= $prop['telefono'] ?></td>
                <td><?= $prop['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
