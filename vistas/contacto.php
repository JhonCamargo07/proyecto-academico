<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1.0" user-scalable=no />
    <meta name="author" content="Jhon Camargo">
    <meta name="description" content="Consultar matriculas en el Colegio Rafael Uribe Uribe (IED) Localidad 19 Bogotá - Ciudad Bolívar.">
    <meta name="keywords" content="Colegio Rafael Uribe Uribe, Colegio, Educacion, Rafael Uribe, Colegios ciudad Bolívar, correo Colegio Rafael Uribe Uribe, contacto Colegio Rafael Uribe Uribe">
    <meta http-equiv="refresh" content="1800"> <!-- 30 Minutos -->
    <link rel="stylesheet" href="css/todos/index.css">
    <link rel="stylesheet" href="css/todos/formularios.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="shortcut icon" href="imagenes/escudo.jpg">
    <title>Contacto | Colegio Rafael Uribe Uribe</title>
</head>
<body>
    <div class="contenedor-contacto">

        <header class="header">

            <img src="imagenes/simbolos.png" loading="lazy" alt="Escudo y bandera del colegio Rafael Uribe Uribe">
            <h1>Colegio Rafael Uribe Uribe</h1>

        </header>

        <nav class="nav">

            <label for="btn-menu" class="icon-view-list"></label>
            <input type="checkbox" id="btn-menu" class="icono">

            <div class="menu">
                <ul>
                    <li><a href="../" class="botones"><span class="icon-home"></span>Inicio</a></li>
                    <li><a href="login.php" class="botones"><span class="icon-enter"></span>Ingresar</a></li>
                    <li><a href="contacto.php" class="botones activo"><span class="icon-phone"></span>Contacto</a></li>
                    <li><a href="ayuda.html" class="botones"><span class="icon-question-circle pregunta"></span>Ayuda</a></li>
                </ul>
            </div>

        </nav>

        <main>
            <h1>Formulario de contacto</h1>
            <form action="contacto.php" method="POST" class="contenido">
                <div class="inputs">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="recolectores" placeholder="Nombre" id="nombre" required>
                </div>
                <div class="inputs">
                    <label for="email">Correo:</label>
                    <input type="email" class="recolectores" placeholder="correo@correo.com" id="email" required>
                </div>
                <div class="inputs">
                    <label for="asunto">Asunto:</label>
                    <input type="text" class="recolectores" placeholder="Asunto" id="asunto" required>
                </div>
                <div class="inputs">
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje" class="textarea" rows="10" placeholder="Mensaje:" required></textarea>
                </div>
                <div class="inputs">
                    <center>
                        <input type="submit" class="boton primario" value="Enviar correo">
                    </center>
                </div>
                
            </form>
        </main>

        <?php include('admin/footer.php'); ?>

    </div>

    <script src="js/configuraciones.js"></script>
</body>
</html>