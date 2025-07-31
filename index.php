<?php include('includes/header.php'); ?>

<div class="text-center">
  <h1 class="mb-4">Bienvenido a la Librería Online</h1>
  <p class="lead">Consulta la información disponible en las diferentes secciones.</p>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col">
    <div class="card shadow-sm h-100">
      <div class="card-body">
        <h5 class="card-title">Autores</h5>
        <p class="card-text">Consulta el listado completo de autores registrados.</p>
        <a href="autores.php" class="btn btn-primary">Ver Autores</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow-sm h-100">
      <div class="card-body">
        <h5 class="card-title">Biografías</h5>
        <p class="card-text">Lee las biografías de los autores.</p>
        <a href="biografias.php" class="btn btn-primary">Ver Biografías</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow-sm h-100">
      <div class="card-body">
        <h5 class="card-title">Derechos</h5>
        <p class="card-text">Consulta los derechos relacionados a los títulos.</p>
        <a href="derechos.php" class="btn btn-primary">Ver Derechos</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow-sm h-100">
      <div class="card-body">
        <h5 class="card-title">Descuentos</h5>
        <p class="card-text">Consulta los descuentos disponibles en tiendas.</p>
        <a href="descuento.php" class="btn btn-primary">Ver Descuentos</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow-sm h-100">
      <div class="card-body">
        <h5 class="card-title">Detalle de Venta</h5>
        <p class="card-text">Consulta detalles de las ventas realizadas.</p>
        <a href="detalle_venta.php" class="btn btn-primary">Ver Detalle Venta</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow-sm h-100">
      <div class="card-body">
        <h5 class="card-title">Publicadores</h5>
        <p class="card-text">Consulta la información de los publicadores.</p>
        <a href="publicadores.php" class="btn btn-primary">Ver Publicadores</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow-sm h-100">
      <div class="card-body">
        <h5 class="card-title">Tiendas</h5>
        <p class="card-text">Consulta los datos de las tiendas asociadas.</p>
        <a href="tiendas.php" class="btn btn-primary">Ver Tiendas</a>
      </div>
    </div>
  </div>

  <!-- Contacto abajo -->
  <div class="col">
    <div class="card shadow-sm h-100">
      <div class="card-body">
        <h5 class="card-title">Contacto</h5>
        <p class="card-text">Formulario para enviar tus consultas o comentarios.</p>
        <a href="contacto.php" class="btn btn-primary">Ir a Contacto</a>
      </div>
    </div>
  </div>

</div>

<?php include('includes/footer.php'); ?>
