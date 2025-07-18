<?php 

session_start();

// ? VISTA PARA LA CONFIGURACIÓN DEL SISTEMA, CREACIÓN DE NUEVAS COLUMNAS EN LAS TABLAS

// ? MANTENIMIENTO
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../Layouts/Header.php"); ?>
    <title>Movimientos - Sistema Gestion de activos</title>
</head>
<body class="sidebar-mini control-sidebar-slide-open layout-navbar-fixed layout-fixed sidebar-mini-xs sidebar-mini-md sidebar-collapse">
    <div class="wrapper">
        <?php require_once("../Layouts/Head-Body.php"); ?>
        <?php require_once("../Layouts/SideBar.php"); ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="content-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Configuración del sistema</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Configuración
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-list"></i> Lista de Configuració</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" id="divfiltros">
                                            <div class="row">
                                                <div class="col-md-3 offset-md-9">
                                                    <div class="form-group">
                                                        <button class="btn btn-primary btn-block" id="btnnuevo"><i class="fa fa-plus"></i> Nuevo</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table id="tblregistros" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th><i class="fa fa-cogs"></i></th>
                                                            <th>Tabla de config</th>
                                                            <th>Tabla de config</th>
                                                            <th>Tabla de config</th>
                                                            <th>Tabla de config</th>
                                                            <th>Tabla de config</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once("../Layouts/Footer.php"); ?>
        <script src="configuracion.js"></script> 
    </div>
</body>
</html>