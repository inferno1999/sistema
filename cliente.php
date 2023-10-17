<?php  
	/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
    session_start();
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Programand Brothers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <link href="css/lib/jquery.dataTables.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="css/compiled/layout.css" />
    <link rel="stylesheet" type="text/css" href="css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="css/compiled/icons.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/compiled/form-showcase.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/compiled/datatables.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/pb/pb.css" type="text/css"/>
    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=OpenSans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!-- lato font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />
</head>
<body>
    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
        <div class="navbar-header">            
            <a class="navbar-brand" href="principal.php">
                <img src="css/images/logo.png" alt="logo" width="70%">
            </a>
        </div>
        <ul class="nav navbar-nav pull-right hidden-xs">                       
            <li class="notification-dropdown hidden-xs hidden-sm">
                <div class="pop-dialog">                    
                </div>
            </li>
            <li class="dropdown open">
                <a href="#" class="dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">
                    Bienvenido<?php echo ": ".$_SESSION['usuario'] ?>                   
                </a>                
            </li>             
            <li class="settings hidden-xs hidden-sm">
                <a href="cerrarSesion.php" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="principal.php">
                    <i class="icon-home"></i>
                    <span>Inicio</span>
                </a>
            </li>            
            
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>Usuarios</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="cliente.php" >Personal operativo</a></li>   
                    <li><a href="academia.php" >Academia</a></li>                     
                </ul>
            </li> 
        </ul>
    </div>
    <!-- end sidebar -->


    <!-- main container -->
    <div class="content">

        <!-- end upper main stats -->

        <div id="pad-wrapper" class="form-page">

            <!-- statistics chart built with jQuery Flot -->
            <div class="row form-wrapper">
                <!-- left column -->
                <div id="miPagina" class="col-md-4 column">

                    <form method="POST" enctype="multipart/form-data">
                        <h1>Registro de personal operativo</h1>
                        <hr>
                        <div class="field-box">
                            <label>Grado:</label>
                            <div class="col-md-8">
                                <select id="grado" name="grado" class="form-control">
                                    <option value="Crnl">Crnl.</option>
                                    <option value="Tcnl">Tcnl.</option>
                                    <option value="My">My.</option>
                                    <option value="Cap">Cap.</option>
                                    <option value="Tte">Tte.</option>
                                    <option value="Sbtte">Sbtte.</option>
                                    <option value="B">B.</option>
                                </select> 
                            </div>                            
                        </div>
                        <div class="field-box">
                            <label>Nombre:</label>
                            <div class="col-md-8">
                                <input name="nombre" id="nombre" class="form-control" required autofocus type="text">
                            </div>                            
                        </div>
                        <div class="field-box">
                            <label>Apellido Paterno:</label>
                            <div class="col-md-8">
                                <input name="ape_paterno" id="ape_paterno" class="form-control" required type="text">
                            </div>                            
                        </div>
                        <div class="field-box">
                            <label>Apellido Materno:</label>
                            <div class="col-md-8">
                                <input name="ape_materno" id="ape_materno" class="form-control" required type="text">
                            </div>                            
                        </div>
                        <div class="field-box">
                            <label>Antecedentes:</label>
                            <div class="col-md-8">
                                <select id="antecedente" name="antecedente" class="form-control">
                                    <option value="Sin antecedentes">Sin antecedentes</option>
                                    <option value="Presenta FELCN">Presenta FELCN</option>
                                    <option value="Presenta FELCV">Presenta FELCV</option>
                                    <option value="Presenta FELCN y FELCV">Presenta FELCN y FELCV</option>
                                </select> 
                            </div>                            
                        </div>
                        
                        <div class="field-box">
                            <label>CI:</label>
                            <div class="col-md-8">
                                <input name="dni" id="dni" class="form-control" required type="number" min="00000000" max="99999999">

                            </div>    

                        </div>

                        <div class="field-box">
                            <label>Direccion:</label>
                            <div class="col-md-8">
                                <input name="direccion" id="direccion" class="form-control" required type="text">
                            </div>                            
                        </div>                       
                        <div class="field-box">
                            <label>Estado:</label>
                            <div class="col-md-8">
                                <select id="operatividad" name="operatividad">
                                    <option value="Operativo">Operativo</option>
                                    <option value="Con licencia indefinida">Con licencia indefinida</option>
                                    <option value="Con licencia especial">Con licencia especial</option>
                                    <option value="Baja por inasistencia">Baja por inasistencia</option>
                                    <option value="Baja definitiva">Baja definitiva</option>
                                </select> 
                            </div>                            
                        </div>
                        <!-- ... (código HTML anterior) ... -->

                        <div class="field-box">
                            <label>Documento PDF para FELCC:</label>
                            <div class="col-md-8">
                                <input name="felcc" type="file">
                            </div>
                        </div>

                        <div class="field-box">
                            <label>Documento PDF para FELCN:</label>
                            <div class="col-md-8">
                                <input name="felcn" type="file">
                            </div>
                        </div>

                        <!-- ... (resto del código HTML) ... -->
                        <div class="action">
                            <input type="submit" class="btn-flat" id="registrar" value="Registrar" ></input>
                            <input type="button" onclick="listarClientes();"  class="btn-flat" id="mostrar" value="Mostrar" ></input>
                        </div> 

                    </form>

                    <div id="mensaje" class="col-md-6">
                        
                    </div>

                </div>

                <!-- right column -->
                <div id="miTabla" class="col-md-8 column pull-right">
                    <div id="cargando"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- scripts -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/wysihtml5-0.3.0.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.datepicker.js"></script>
    <script src="js/jquery.uniform.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery-ui-1.10.2.custom.min.js"></script>  
    <script src="js/theme.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/personal.js"></script>
    <script>
        registrarCliente()
    </script>
</body>
</html>
