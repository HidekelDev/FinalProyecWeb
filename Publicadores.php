<?php include('includes/conexion.php'); include('includes/header.php'); ?>
<h2 class="mb-4">Publicadores</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID Publicador</th>
      <th>Nombre</th>
      <th>Ciudad</th>
      <th>Estado</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt = $pdo->query("SELECT * FROM publicadores");
    foreach ($stmt as $row): ?>
    <tr>
      <td><?= $row['id_pub'] ?></td>
      <td><?= $row['nombre_pub'] ?></td>
      <td><?= $row['ciudad'] ?></td>
      <td><?= $row['estado'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include('includes/footer.php'); ?>
