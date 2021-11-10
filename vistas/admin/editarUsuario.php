<?php
    require_once('../../modelos/login.php');
    require_once('../../modelos/estudiante.php');
    $modeloLogin = new Login();
    $modeloLogin->validarSesion();
    $modeloLogin->validarRolAdmin();
    $model = new Estudiante();
    $model->id = $_GET['id'];
    $Usuario = $model->Obtener($model->id);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/todos/index.css">
    <link rel="stylesheet" href="../css/todos/formularios.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://kit.fontawesome.com/dca352768f.js" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <div class="contenedor">
        <?php include('../admin/header.php'); 
            if($Usuario != null){
                foreach($Usuario as $datos){
        ?>
        <nav>
                <ul>
                    <li><a href="../" class="botones"><span class="icon-undo"></span>Volver</a></li>
                </ul>
                <ul>
                    <li><a href="/proyectoacademico/vistas/profesor/" class="botones"><span class="icon-user-plus"></span>Mi perfil</a></li>
                </ul>
                <ul>
                    <li><a class="botones activo"><span class="icon-user-plus"></span>Editar mi perfil</a></li>
                </ul>
            </nav>
        <div class="contenido">
            <h1>Editar mis datos</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="hidden" value="<?php echo $datos['IDProfesorPK']; ?>">

                <div class="inputs">
                    <b><label for="nombres-estudiante">Nombres:</label></b>
                    <input type="text" name="nombres-estudiante" id="nombres-estudiante" placeholder="Nombres del estudiante" class="recolectores" value="<?php echo $datos['NombreProfesor']; ?>" required>
                </div>

                <div class="inputs">
                    <b><label for="apellidos-estudiante">Apellidos:</label></b>
                    <input type="text" name="apellidos-estudiante" id="apellidos-estudiante" placeholder="Apellidos del estudiante" class="recolectores" value="<?php echo $datos['ApellidoProfesor']; ?>" required>
                </div>

                <div class="inputs">
                    <b><label for="documento-estudiante">Número de documento:</label></b>
                    <input type="number" name="documento-estudiante" id="documento-estudiante" placeholder="Número de identificacion "class="recolectores" value="<?php echo $datos['DocProfesor']; ?>" required>
                </div>

                <div class="inputs">
                        <b><label for="estado-Estudiante">Estado del estudiante:</label></b>
                        <select name="estadoEstudiante" id="estadoEstudiante" class="recolectores" required>
                            <option <?php if($datos['EstadoUsuario'] == 1){echo "Selected";} ?> value="1">Activo</option>
                            <option <?php if($datos['EstadoUsuario'] == 2){echo "Selected";} ?> value="2">Inactivo</option>
                        </select>
                    </div>

                    <div class="inputs">
                        <b><label for="sexoEstudiante">Sexo:</label></b>
                        <select name="sexoEstudiante" id="sexoEstudiante" class="recolectores" required>
                            <option <?php if($datos['SexoUsuario'] == 1){echo "Selected";} ?> value="1">Hombre</option>
                            <option <?php if($datos['SexoUsuario'] == 2){echo "Selected";} ?> value="2">Mujer</option>
                            <option <?php if($datos['SexoUsuario'] == 3){echo "Selected";} ?> value="3">Indefinido</option>
                        </select>
                    </div>

                <div class="inputs">
                    <b><label for="correo-estudiante">Correo:</label></b>
                    <input type="email" name="correo-estudiante" id="correo-estudiante" placeholder="Correo del estudiante" class="recolectores" value="<?php echo $datos['Email']; ?>" required>
                </div>

                <div class="inputs">
                    <b><label for="usuario-estudiante">Usuario:</label></b>
                    <input type="text" name="usuario-estudiante" id="usuario-estudiante" placeholder="Nombre de usuario" class="recolectores" value="<?php echo $datos['Usuario']; ?>" required>
                </div>

                <div class="inputs">
                    <b><label for="password-estudiante">Contraseña:</label></b>
                    <input type="password" name="password-estudiante" id="password-estudiante" placeholder="Contraseña segura" title="Escriba una contraseña que sea segura." class="recolectores" required>
                    <span class="icon-eye-blocked eye" id="icono1"></span>
                </div>

                <div class="inputs">
                    <center>
                        <input type="submit" value="Actualizar mis datos" class="boton primario">
                    </center>
                </div>
            </form>
        </div>
        
        <?php
                }
            }
            include('footer.php');
        ?>
    </div>

    <script src="../js/navegador.js"></script>
    <script src="../js/viewPassword.js"></script>
    <script src="../js/configuraciones.js"></script>
</body>
</html>