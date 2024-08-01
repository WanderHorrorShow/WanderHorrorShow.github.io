<?

include 'wanderhorrorshow.sql';


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/abril2024.css"/>


    <title>Horarios / WanderHorrorShow Abril 2024</title>
    <style>
        /* Estilos CSS para hacer la página responsive */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .grid-item {
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Horario de Videos Gaming</h1>
        <div class="grid">
            <!-- Aquí colocarás las imágenes de tus videos -->
            <div class="grid-item">
                <img src="img/a plague of tale miniatura cap 8.png" alt="Video 1">
                <p>9 Abril 2024 <br>
                A Plague Tale: Innocence Capítulo VIII | Nuestro Hogar<br>
                </p>
            </div>
           
           
            <div class="grid-item">
                <img src="img/a plague of tale miniatura cap 9-10.jpg" alt="Video 2">
                <p> 12 Abril 2024<br>
                A Plague Tale: Innocence Capítulos 9 y 10 | Gameplay en español<br>   
                </p>
            </div>
           
            <div class="grid-item">
                <img src="img/a plague of tale miniatura cap 11-12.png" alt="Video 3">
                <p>14 Abril 2024<br>
                A Plague Tale: Innocence Capítulos 11 y 12 | Gameplay en español<br>
                </p>
            </div>

            
            <div class="grid-item">
                <img src="img/a plague of tale miniatura cap 13.png" alt="Video 3">
                <p>16 Abril 2024<br>
                A Plague Tale: Innocence Capítulo 13| Gameplay en español<br>
                </p>
            </div>

                
            <div class="grid-item">
                <img src="img/a plague of tale miniatura cap 14.png" alt="Video 3">
                <p>19 Abril 2024<br>
                A Plague Tale: Innocence Capítulo 14| Gameplay en español<br>
                </p>
            </div>
            

                
            <div class="grid-item">
                <img src="img/a plague of tale miniatura cap 15.png" alt="Video 3">
                <p>23 Abril 2024<br>
                A Plague Tale: Innocence Capítulo 15| Gameplay en español<br>
                </p>
            </div>

         
        </div>
        <!-- Botón para gestionar horarios o recordatorios -->
        <button>Administrar Horarios</button>
    </div>
</body>
</html>
