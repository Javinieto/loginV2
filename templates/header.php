<?php
/**
 * @title: Proyecto integrador Ev01 - Cabecera y barrra de navegación.
 * @description:  Script PHP para la gestión de la sesión de usuario.
 *                Dependiendo si el usuario esta registrado o no aparecen unas
 *   opciones en la barra de navegación.
 *
 * @version    0.1
 *
 * @author ander_frago@cuatrovientos.org
 */

  // Obtenemos el directorio del proyecto para establecer rutas relativas.
  $dir = __DIR__;

  require_once $dir . '/../utils/SessionHelper.php';

  /// =================================
  /// Gestión de la sesión de usuario:
  /// =================================

  // String para almacenar el nombre de usuario, por defecto "Invitado"
  $userstr = '(Invitado)';

  // TODO Almacena en la variable $loggedin el valor retornado de la función loggedin de SessionHelper
  $loggedin = SessionHelper::loggedIn();

  if ($loggedin) {
    $user = $_SESSION['user'];
    $userstr = " ($user)";
  }

?>
<head>
    <meta charset="utf-8">
    <title><?php echo "$appname $userstr" ?></title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href=".\..\assets\css\bootstrap.css">

</head>

<body>
<?php
  // En caso de tener una sesión registrada con antelación mostramos las opciones avanzadas de la aplicación
  if ($loggedin)
  {
  ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right" type="button"
                data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarToggler" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="./index.php">Artean</a>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="app/logout.php">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
  <?php
}
else {
  // En caso de ser usuario no registrado, (Invitado)
  ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right" type="button"
                data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarToggler" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="./index.php">Artean</a>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="app/signup.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="app/logout.php">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
  <?php
}
?>

<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<script src=".\..\assets\js\bootstrap.js"></script>
