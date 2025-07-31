<?php include('includes/conexion.php'); include('includes/header.php'); ?>
<h2 class="mb-4">Biografías</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID Autor</th>
      <th>Biografía</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt = $pdo->query("SELECT * FROM biografias");
    foreach ($stmt as $row): ?>
    <tr>
      <td><?= htmlspecialchars($row['id_autor']) ?></td>
      <td><?= htmlspecialchars($row['biografia']) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include('includes/footer.php'); ?>
