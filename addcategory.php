<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Añadir categoría de producto - inventario</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-small.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="index.php" class="logo">
<img src="assets/img/logo.png" alt="">
</a>
<a href="index.php" class="logo-small">
<img src="assets/img/logo-small.png" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">

<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="#">
<div class="searchinputs">
<input type="text" placeholder="Search Here ...">
<div class="search-addon">
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</div>
</div>
<a class="btn" id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a>
</form>
</div>
</li>

<?php
include "layout/profile.php";
?>
</ul>

</div>

<?php
include "layout/menu.php";
?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Añadir categoría de producto</h4>
<h6>Crear nueva categoría de producto</h6>
</div>
</div>

<form action="agregar_categoria.php" method="POST" enctype="multipart/form-data">
  <div class="card">
    <div class="card-body">
      <div class="row">

        <div class="col-lg-6 col-sm-6 col-12">
          <div class="form-group">
            <label>Nombre de la categoría</label>
            <input type="text" name="nombre" class="form-control" required>
          </div>
        </div>

        <!-- Se eliminó el campo Category Code -->

        <div class="col-lg-12">
          <div class="form-group">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="form-group">
            <label>Imagen del producto</label>
            <div class="image-upload">
              <input type="file" name="imagen" accept="image/*" class="form-control">
              <div class="image-uploads">
                <img src="assets/img/icons/upload.svg" alt="img">
                <h4>Subir imagen</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <button type="submit" class="btn btn-submit me-2">Guardar</button>
          <a href="categorylist.php" class="btn btn-cancel">Cancel</a>
        </div>

      </div>
    </div>
  </div>
</form>


</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>