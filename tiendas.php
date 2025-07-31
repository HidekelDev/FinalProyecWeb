<?php include('includes/conexion.php'); include('includes/header.php'); ?>
<h2 class="mb-4">Tiendas</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Dirección</th>
      <th>Ciudad</th>
      <th>Estado</th>
      <th>País</th>
      <th>Código Postal</th>
      <th>Términos</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt = $pdo->query("SELECT * FROM tiendas");
    foreach ($stmt as $row): ?>
    <tr>
      <td><?= $row['id_tienda'] ?></td>
      <td><?= $row['nombre_tienda'] ?></td>
      <td><?= $row['direcc_tienda'] ?></td>
      <td><?= $row['ciudad'] ?></td>
      <td><?= $row['estado'] ?></td>
      <td><?= $row['pais'] ?></td>
      <td><?= $row['cod_postal'] ?></td>
      <td><?= $row['terminos'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include('includes/footer.php'); ?>
