<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Lista de subcategorías de productos - Inventario</title>

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
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="">
</a>
<a href="index.html" class="logo-small">
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
<h4>Lista de subcategorías de productos</h4>
<h6>Ver/Buscar categoría de producto</h6>
</div>
<div class="page-btn">
<a href="subaddcategory.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" class="me-2" alt="img"> Agregar subcategoria</a>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">
<a class="btn btn-filter" id="filter_search">
<img src="assets/img/icons/filter.svg" alt="img">
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</a>
</div>
<div class="search-input">
<a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
</div>
</div>
<div class="wordset">
<ul>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
</li>

</ul>
</div>
</div>

<div class="card" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<label>Categoría</label>
<select class="select">
<option>Eliga una categoria</option>
<option>....</option>
</select>
</div>
</div>
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<label>Subcategoría</label>
<select class="select">
<option>Elija subcategoría</option>
<option>.....</option>
</select>
</div>
</div>
<div class="col-lg-2 col-sm-6 col-12">
<div class="form-group">
<label>Codigo de categoria</label>
<select class="select">
<option>.....</option>
</select>
</div>
</div>
<div class="col-lg-1 col-sm-6 col-12 ms-auto">
<div class="form-group">
<label>&nbsp;</label>
<a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table  datanew">
<thead>
<tr>
<th>
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Imagen</th>
<th>Categoría</th>
<th>Categoría principal</th>
<th>Codigo de categoría</th>
<th>Descripcion</th>
<th>Creado por</th>
<th>Accion</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product1.jpg" alt="product">
</a>
</td>
<td>Computers</td>
<td>Computers</td>
<td>CT001</td>
<td>Computers Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product2.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT002</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product3.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT003</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product4.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT004</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product5.jpg" alt="product">
</a>
</td>
<td>Accessories</td>
<td>Accessories</td>
<td>CT005</td>
<td>Accessories Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product6.jpg" alt="product">
</a>
</td>
<td>Shoes</td>
<td>Shoes</td>
<td>CT006</td>
<td>Shoes Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product7.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT007</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product8.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT008</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product9.jpg" alt="product">
</a>
</td>
<td>Computers</td>
<td>Computers</td>
<td>CT009</td>
<td>Computers Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product10.jpg" alt="product">
</a>
</td>
<td>Health Care	</td>
<td>Health Care	</td>
<td>CT0010</td>
<td>Health Care Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product4.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT004</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product5.jpg" alt="product">
</a>
</td>
<td>Accessories</td>
<td>Accessories</td>
<td>CT005</td>
<td>Accessories Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product6.jpg" alt="product">
</a>
</td>
<td>Shoes</td>
<td>Shoes</td>
<td>CT006</td>
<td>Shoes Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product7.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT007</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product8.jpg" alt="product">
</a>
</td>
<td>Fruits</td>
<td>Fruits</td>
<td>CT008</td>
<td>Fruits Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product9.jpg" alt="product">
</a>
</td>
<td>Computers</td>
<td>Computers</td>
<td>CT009</td>
<td>Computers Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td>
<a class="product-img">
<img src="assets/img/product/product10.jpg" alt="product">
</a>
</td>
<td>Health Care	</td>
<td>Health Care	</td>
<td>CT0010</td>
<td>Health Care Description</td>
<td>Admin</td>
<td>
<a class="me-3" href="editsubcategory.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

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