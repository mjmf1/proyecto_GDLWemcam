<?php try {
  require_once('includes/funciones/bd_conexion.php');
  $sql = "SELECT * FROM `invitados` ";
  $res = $conn->query($sql);
} catch (\Exception $e) {
  echo $e->getMessage();
}
?>

<section class="invitados contenedor seccion">
  <h2>Nuestros invitados</h2>
  <ul class="lista-invitados clearfix">
    <?php while ($invitados = $res->fetch_assoc()) { ?>
      <li>
        <div class="invitado">
          <a class="invitado-info" href="#invitado <?php echo $invitados['invitado_id']; ?> ">
            <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="invitado" />
            <p><?php echo $invitados['nombre_invitado'] . "" . $invitados['apellido_invitado'] ?></p>
          </a>
        </div>
      </li>
      <div style="display:none;">
        <div class="invitado-info" id="invitado <?php echo $invitados['invitado_id']; ?> ">
          <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="invitado" />
          <h2><?php echo $invitados['nombre_invitado'] . "" . $invitados['apellido_invitado']; ?></h2>
          <p><?php echo $invitados['descripcion'] ?></p>
        </div>
      </div>
    <?php  } //while de fetch_asso() 
    ?>
  </ul>
</section>


<?php
$conn->close(); ?>