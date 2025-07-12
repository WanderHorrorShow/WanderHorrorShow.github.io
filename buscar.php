
<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "id19847497_wanders";
$password = "Su2=G5-aQ26d&o(&";
$dbname = "id19847497_wander";

$conn = new mysqli($servername, $username, $password, $dbname);


// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Manejar solicitud de búsqueda
if (isset($_POST['buscar'])) {
    $termino_busqueda = $_POST['termino_busqueda'];

    // Realizar consulta a la base de datos
    $sql = "SELECT * FROM juegos WHERE nombre LIKE '%$termino_busqueda%' OR categoria LIKE '%$termino_busqueda%'";
    $resultado = $conn->query($sql);
}

// Cerrar conexión
$conn->close();
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<title>WanderHorrorShow</title>
	<meta charset="UTF-8">
	<meta name="description" content="Wander Horror  Show  Blog">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
	<!-- Favicon -->   
	<link href="img/logotransparentehorrorshow.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/footer.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<style>
body {
      background-image: url("img/backgroundwhite.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
	<header>
	
	</header>
	<!-- Header section end -->

 <!--------Nav-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Hogar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="normas.php">Normas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comentario.html">Comentarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
	  <form class="d-flex ms-auto" action="buscar.php" method="POST">
		<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" name="termino_busqueda">
		<button class="btn btn-outline-success" type="submit" name="buscar">Buscar</button>
    </div>
  </div>
</nav>

<!-------Fin del Nav----------------->






	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Ultimas Noticias</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">nuevo</span>Pagina para descargar juegos</div>
				<div class="nt-item"><span class="strategy">Aventuras</span>Juegos de Subgenero Estrategia</div>
				<div class="nt-item"><span class="racing">Acción</span>Juegos de Carreras/Acción/Rpg/etc </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->




<div class="container">

<table>
  <thead>
    <tr>
      <th><h4 class="text-center">Imagen</h4></th>
      <th><h4 class="text-center">Nombre del Juego</h4></th>
      <th><h4 class="text-center">Enlace de Descarga</h4></th>
    </tr>
  </thead>
  <tbody>
    <?php
      // Verificar si la consulta tiene resultados
      if ($resultado && $resultado->num_rows > 0) {
        // Recorre los resultados con un bucle while
        while ($row = mysqli_fetch_assoc($resultado)) {
          echo "<tr>";
          echo "<td><img src='".$row['imagen']."' alt='".$row['nombre']."'></td>";
          echo "<td>".$row['nombre']."</td>";
          echo "<td><a href='".$row['enlace_descarga']."'>Descargar</a></td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
      }
    ?>
  </tbody>
</table>

<p class="text-center">Imagen de background de starline</a> en Freepik</p>

	</div>
	

<!-- Recent game section  -->

		
        <h2>Instalación de juegos</h2>


		<p>Instalar Dark Souls</p>
		<iframe title="vimeo-player" src="https://player.vimeo.com/video/821884946?h=6208144e50" width="540" height="360" frameborder="0" allowfullscreen></iframe>
         

	<!-- Recent game section end -->




<!---footer-->
	
<footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Encuentrame</h4>
                                <span>Perú</span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Enviame un correo</h4>
                                <span>wanderhorrorshow@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/logotransparentehorrorshow.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>WanderHorrorShow así como sus diversos canales renacido en Thekingdom
                                of absolution es un canal, comunidad, pagina de descargas de juegos gratiutos.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="index.html">Hogar</a></li>
                                <li><a href="#">acerca de</a></li>
                                <li><a href="#">servicios</a></li>
                                <li><a href="#">Contactos</a></li>
                                <li><a href="#">Acerca de mi</a></li>
                                <li><a href="comentarios.php">comentarios</a></li>
                                <li><a href="#">Wanders</a></li>
                                <li><a href="#">Contactame</a></li>
                                <li><a href="#">Ultimas noticias</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>No te pierdas los juegos gratuitos sin link de publicidad en un solo link.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved WanderhorrorShow y agradece  al autor del "footer" menu inferior de la pagina<a href="https://codepen.io/anupkumar92/">Anup</a>WanderHorrorShow todos los derechos
                        reservados/ se reserva y da creditos a todos los autores</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index.html">Hogar</a></li>
                                <li><a href="#">Terminos</a></li>
                                <li><a href="#">Privacidad</a></li>
                                <li><a href="normas.php">Polictica</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	

	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>
