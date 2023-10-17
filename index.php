<?php 
	/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los v�deos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR M�S POCO QUE SEA".
	*/
    //verificar si mi session a�n existe, si existe entonces que no nos deje pasar a index, 
    // y la redireccionamos a prinpipal hasta q la session se destruya
    session_start();
    if(isset($_SESSION['usuario'])){
        header("Location: principal.php");
    }
?>
<!DOCTYPE html>
<html class="login-bg" lang="es">
<head>
    <title>Iniciar Sesión</title>
    <meta http-equiv="Content-Type" content="text/html; charset=uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />    
    <link href="css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="css/compiled/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/signup.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=OpenSans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="header">
        <div align="center">
            <h1 style="color: white">Recursos Humanos - Fundasol</h1>
        </div>
    </div>
    <div class="login-wrapper">
        <form id="miFormulario" action="login.php" method="POST">
        
            <div class="box">
                <div class="content-wrap">
                    <h6>Iniciar Sesión</h6>
                    <input name="usuario" id="usuario" class="form-control" type="text" placeholder="Usuario" required autofocus>
                    <input name="contra" id="contra" class="form-control" type="password" placeholder="Contrase�a" required>                
                    <div class="action">
                        <button class="btn-flat" id="submit">Iniciar Sesión</button>
                    </div>                
                </div>
                <div id="msg">                            
                </div>
            </div>
        </form>
    </div>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>
