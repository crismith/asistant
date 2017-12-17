<?php 

    $url = "http://localhost:8080/";
?>
<body id="minovate" class="appWrapper">
    <div id="wrap" class="animsition">

        <section id="header">
            <header class="clearfix">
                <div class="branding">
                    <a class="brand" href="<?php echo $url; ?>index.php">
                        <span>
                            <strong>ASI</strong>STANT
                        </span>
                    </a>
                    <a href="<?php echo $url; ?>#" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <ul class="nav-right pull-right list-inline">
                    <li class="dropdown nav-profile">
                        <a href="<?php echo $url; ?>" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $url; ?>assets/images/profile-photo.jpg" alt="" class="img-circle size-45x45">
                            <span>Cristhian Smith 
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu animated littleFadeInRight" role="menu">
                            <li>
                                <a href="<?php echo $url; ?>#"><i class=""></i>Cerrar Sección</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
        </section>

        <div id="controls">
            <aside id="sidebar">
                <div id="sidebar-wrap">
                    <div class="panel-group slim-scroll" role="tablist">
                        <div class="panel panel-default">
                            <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <ul id="navigation">
                                        <li>
                                            <a href="<?php echo $url; ?>index.php">
                                                <i class="fa fa-home"></i> 
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url; ?>#">
                                                <i class="fa fa-user"></i> 
                                                <span>Administrador</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a role="button"  href="<?php echo $url; ?>#">
                                                        <i class="fa fa-group"></i> 
                                                        Docentes
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a role="button" href="<?php echo $url; ?>admin/docente/docente-crea.php" >
                                                                <i class="fa fa-user"></i> 
                                                                Registrar Docente
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role="button" href="<?php echo $url; ?>admin/docente/docentes.php" >
                                                                <i class="fa fa-group"></i>
                                                                Docentes
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a role="button" href="<?php echo $url; ?>admin/docente/docente-perfil.php" >
                                                                <i class="fa fa-group"></i>
                                                                Perfil de Docentes
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a role="button" href="<?php echo $url; ?>#" >
                                                        <i class="fa fa-book"></i> Cursos
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a role="button" href="<?php echo $url; ?>admin/curso/curso-crea.php" >
                                                                <i class="fa fa-book"></i> Registrar Curso
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role="button" href="<?php echo $url; ?>admin/curso/curso-asignar.php"  >
                                                                <i class="fa fa-book"></i> Asignar Curso
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role="button" href="<?php echo $url; ?>admin/curso/cursos.php" >
                                                                <i class="fa fa-book"></i> Cursos
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a role="button"  href="<?php echo $url; ?>#">
                                                        <i class="fa fa-mortar-board"></i> Carrera
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a role="button" href="<?php echo $url; ?>admin/carrera/carrera-crear.php" >
                                                                <i class="fa fa-mortar-board"></i>Registrar Carrera
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role="button" href="<?php echo $url; ?>admin/carrera/carreras.php"   >
                                                                <i class="fa fa-mortar-board"></i> Carreras
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a role="button" href="<?php echo $url; ?>#" >
                                                        <i class="fa fa-gear"></i> Configuración
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a role="button" href="<?php echo $url; ?>admin/config.php" >
                                                                <i class="fa fa-gear"></i>AsisConfig 
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url; ?>#">
                                                <i class="fa fa-book"></i>
                                                <span>Cursos</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $url; ?>docente/curso/curso.php">
                                                        <i class="fa fa-book"></i>Cursos
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="<?php echo $url; ?>#">
                                                <i class="fa fa-list"></i>
                                                <span>Clases</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $url; ?>docente/clase/clase-crear.php">
                                                        <i class="fa fa-right"></i>Registrar Clases
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $url; ?>docente/clase/clase-cursos.php">
                                                        <i class="fa fa-right"></i>Clases
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>