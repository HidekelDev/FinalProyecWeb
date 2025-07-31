<?php
include('includes/conexion.php');
include('includes/header.php');

$errores = [];
$exito = false;

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha = date('Y-m-d H:i:s');
    $correo = filter_var(trim($_POST['correo'] ?? ''), FILTER_VALIDATE_EMAIL);
    $nombre = trim($_POST['nombre'] ?? '');
    $asunto = trim($_POST['asunto'] ?? '');
    $comentario = trim($_POST['comentario'] ?? '');

    if (!$correo) {
        $errores[] = "Correo electrónico inválido.";
    }
    if (strlen($nombre) < 3) {
        $errores[] = "El nombre debe tener al menos 3 caracteres.";
    }
    if (strlen($asunto) < 3) {
        $errores[] = "El asunto debe tener al menos 3 caracteres.";
    }
    if (strlen($comentario) < 5) {
        $errores[] = "El comentario debe tener al menos 5 caracteres.";
    }

    if (empty($errores)) {
        // Guardar en DB
        $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (:fecha, :correo, :nombre, :asunto, :comentario)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':fecha' => $fecha,
            ':correo' => $correo,
            ':nombre' => $nombre,
            ':asunto' => $asunto,
            ':comentario' => $comentario
        ]);
        $exito = true;
    }
}

// Contar comentarios y obtener lista
$totalComentarios = $pdo->query("SELECT COUNT(*) FROM contacto")->fetchColumn();
$comentarios = $pdo->query("SELECT * FROM contacto ORDER BY fecha DESC")->fetchAll();

?>

<div class="container mt-4">
  <h2>Contacto</h2>

  <?php if ($exito): ?>
    <div class="alert alert-success">¡Comentario enviado con éxito!</div>
  <?php endif; ?>

  <?php if ($errores): ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach($errores as $error): ?>
          <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form method="post" novalidate>
    <div class="mb-3">
      <label for="correo" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="correo" name="correo" required value="<?= htmlspecialchars($_POST['correo'] ?? '') ?>">
    </div>
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>">
    </div>
    <div class="mb-3">
      <label for="asunto" class="form-label">Asunto</label>
      <input type="text" class="form-control" id="asunto" name="asunto" required value="<?= htmlspecialchars($_POST['asunto'] ?? '') ?>">
    </div>
    <div class="mb-3">
      <label for="comentario" class="form-label">Comentario</label>
      <textarea class="form-control" id="comentario" name="comentario" rows="4" required><?= htmlspecialchars($_POST['comentario'] ?? '') ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  <hr>

  <h4>Comentarios enviados (<?= $totalComentarios ?>)</h4>
  <?php if ($totalComentarios == 0): ?>
    <p>No hay comentarios todavía.</p>
  <?php else: ?>
    <ul class="list-group">
      <?php foreach ($comentarios as $c): ?>
        <li class="list-group-item">
          <strong><?= htmlspecialchars($c['nombre']) ?></strong> (<em><?= htmlspecialchars($c['correo']) ?></em>)<br>
          <small><em><?= $c['fecha'] ?></em></small><br>
          <strong>Asunto:</strong> <?= htmlspecialchars($c['asunto']) ?><br>
          <?= nl2br(htmlspecialchars($c['comentario'])) ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>

<?php include('includes/footer.php'); ?>

