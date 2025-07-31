<?php include('includes/conexion.php'); include('includes/header.php'); ?>
<h2 class="mb-4">Derechos</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID Título</th>
      <th>Rango Bajo</th>
      <th>Rango Alto</th>
      <th>Derechos (%)</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt = $pdo->query("SELECT * FROM derechos");
    foreach ($stmt as $row): ?>
    <tr>
      <td><?= $row['id_titulo'] ?></td>
      <td><?= $row['rango_bajo'] ?></td>
      <td><?= $row['rango_alto'] ?></td>
      <td><?= $row['derechos'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include('includes/footer.php'); ?>
