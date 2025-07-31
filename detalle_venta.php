<?php include('includes/conexion.php'); include('includes/header.php'); ?>
<h2 class="mb-4">Detalle de Ventas</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID Tienda</th>
      <th>Número de Orden</th>
      <th>ID Título</th>
      <th>Cantidad</th>
      <th>Descuento (%)</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt = $pdo->query("SELECT * FROM detalle_venta");
    foreach ($stmt as $row): ?>
    <tr>
      <td><?= $row['id_tienda'] ?></td>
      <td><?= $row['num_orden'] ?></td>
      <td><?= $row['id_titulo'] ?></td>
      <td><?= $row['cantidad'] ?></td>
      <td><?= $row['descuento'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include('includes/footer.php'); ?>
