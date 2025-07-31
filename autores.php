<?php include('includes/conexion.php'); include('includes/header.php'); ?>

<h2 class="mb-4">Autores</h2>

<!-- Formulario de búsqueda -->
<form method="get" class="mb-4">
  <div class="input-group">
    <input type="text" name="busqueda" class="form-control" placeholder="Buscar por nombre, apellido o ciudad" value="<?= htmlspecialchars($_GET['busqueda'] ?? '') ?>">
    <button type="submit" class="btn btn-primary">Buscar</button>
    <?php if (!empty($_GET['busqueda'])): ?>
      <a href="autores.php" class="btn btn-secondary">Limpiar</a>
    <?php endif; ?>
  </div>
</form>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th><th>Apellido</th><th>Nombre</th><th>Teléfono</th><th>Dirección</th><th>Ciudad</th><th>Estado</th><th>País</th><th>Código Postal</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Consulta con búsqueda
    $busqueda = $_GET['busqueda'] ?? '';
    if ($busqueda) {
      $stmt = $pdo->prepare("SELECT * FROM autores 
        WHERE nombre LIKE :busqueda OR apellido LIKE :busqueda OR ciudad LIKE :busqueda");
      $stmt->execute(['busqueda' => "%$busqueda%"]);
    } else {
      $stmt = $pdo->query("SELECT * FROM autores");
    }

    foreach ($stmt as $row): ?>
    <tr>
      <td><?= $row['id_autor'] ?></td>
      <td><?= $row['apellido'] ?></td>
      <td><?= $row['nombre'] ?></td>
      <td><?= $row['telefono'] ?></td>
      <td><?= $row['direccion'] ?></td>
      <td><?= $row['ciudad'] ?></td>
      <td><?= $row['estado'] ?></td>
      <td><?= $row['pais'] ?></td>
      <td><?= $row['cod_postal'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include('includes/footer.php'); ?>
