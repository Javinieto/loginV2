<?php
/**
 * @title: Proyecto integrador Ev01 - Página principal
 * @description:  Bienvenida a la aplicación
 *
 * @version    0.1
 *
 * @author ander_frago@cuatrovientos.org
 */

include 'templates/header.php';
?>
<!-- Bootstrap core CSS
* TODO REVISE Este es el aspecto negativo de esta estructura ya que el código esta duplicado
================================================== -->
<link rel="stylesheet" href=".\assets\css\bootstrap.css">

<div class="jumbotron jumbotron-fluid">
  <div id="bienvenida" class="container">
    <h1 class='display-3'>Bienvenid@ a Artean</h1>
    <?php
    if (SessionHelper::loggedIn()) echo "<span class='badge badge-default'> Has iniciado sesión: ".$user."</span>";
    else           echo "<span class='badge badge-default'> por favor, regístrate o inicia sesión.</span>";
    ?>
  </div>
</div>
<div id="bienvenida" class="img-fluid" alt="Responsive image">
  <div class="row">
    <div class="offset-md-3 col-md-6">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Instituto_Cuatrovientos_-_Cuatrovientos_Institutua.png/640px-Instituto_Cuatrovientos_-_Cuatrovientos_Institutua.png"  alt="" title=""/>
      <p class="lead">Desde Cuatrovientos queremos dar la bienvenida a todo el alumnado que por primera vez se acercan al instituto y a aquellos que continúan con sus programas formativos. </p>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <span class="text-muted">Desarrollo Web - 2º DAM.</span>
  </div>
</footer>

<!-- Bootstrap core JavaScript
* TODO REVISE Este es el aspecto negativo de esta estructura ya que el código esta duplicado
================================================== -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<script src=".\assets\js\bootstrap.js"></script>

</body>

</html>