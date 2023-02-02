<?php
if (empty($_SESSION['active'])) {
    header('Location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sistema de Venta</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="../assets/css/material-icon.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/darktheme.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link href="../assets/plugins/datatables/datatables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <script src="../assets/js/all.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/reloj.js" crossorigin="anonymous"></script>
    <script>
        function AbrirCaja(){$.ajax({url:"../caja/abrir_cajon.php"})} 
    </script>
    <script language="javascript">
    function PulsarTecla(event){
        tecla = event.keyCode;
     
        if(tecla==3)
        {
            //foto anterior
           alert("37");
        }
        
        if(tecla==2)
        {
            //foto siguiente
           alert("39");
        }
    }
     
    window.onkeydown=PulsarTecla;
</script>
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/logo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo.png" />

 

</head>

<body onload="mueveReloj()">
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="./" class="logo-icon"><span class="logo-text">Cyber</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="../assets/images/logo.png">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">Control<br><span class="user-state-info">Ventas</span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Contenido
                    </li>
                    <li>
                        <a href="index.php"><span class="material-icons-outlined">
                                home
                            </span> Dashboard</a>
                    </li>
                    <li>
                        <a href="usuarios.php">
                            <span class="material-icons-outlined">
                                person_outline
                            </span> USUARIOS
                        </a>
                    </li>
                    <li>
                        <a href="productos.php">
                            <span class="material-icons-outlined">
                                fact_check
                            </span> PRODUCTOS</a>
                    </li>
                    <li>
                        <a href="clientes.php">
                            <span class="material-icons-outlined">
                                group
                            </span> CLIENTES</a>
                    </li>
                    <li>
                        <a href="config.php"><span class="material-icons-outlined">
                                settings
                            </span> CONFIGURACION</a>
                    </li>
                    <li>
                        <a href=""><span class="material-icons-outlined">
                                point_of_sale
                            </span> VENTAS<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ventas.php">CREAR VENTA</a>
                            </li>
                            <li>
                                <a href="lista_ventas.php">HISTORIAL VENTA</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                            </ul>
                            <button accesskey="c" class="btn btn btn-outline-info mb-0" type="button" href="#" data-bs-toggle="modal" data-bs-target="#modalCajon" onclick="AbrirCaja()">Abrir Cajon</button>
                         </div>
                        <!--  
                        <?php
                        date_default_timezone_set('America/Mexico_City');
                        $fechaActual = date('d/m/y - h:i:s');
                        echo "$fechaActual <br>";
                        ?>-->
                        <form name="form_reloj">
                            <input type="text" name="reloj" size="10" style="background-color : Black; color : White; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
                        </form>

                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown" data-bs-toggle="dropdown"><img src="../assets/images/logo.png" alt=""></a>
                                    <ul class="dropdown-menu dropdown-menu-end language-dropdown" aria-labelledby="languageDropDown">
                                        <li>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalPass">Perfil</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="salir.php">Salir</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">