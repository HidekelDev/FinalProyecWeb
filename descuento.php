<?php include('includes/conexion.php'); include('includes/header.php'); ?>
<h2 class="mb-4">Descuentos</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID Tienda</th>
      <th>Tipo de Descuento</th>
      <th>Cantidad Mínima</th>
      <th>Cantidad Máxima</th>
      <th>Descuento (%)</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt = $pdo->query("SELECT * FROM descuento");
    foreach ($stmt as $row): ?>
    <tr>
      <td><?= $row['id_tienda'] ?></td>
      <td><?= $row['tipo_descuento'] ?></td>
      <td><?= $row['cant_min'] ?></td>
      <td><?= $row['cant_max'] ?></td>
      <td><?= $row['descuento'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include('includes/footer.php'); ?>
