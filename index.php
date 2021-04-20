<?php
//include("conexion.php"); 
session_start(); 

if($_GET['logout']==1) {
  session_unset();
  session_destroy();
  header("location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Destiny Church International - Estamos abriendo destinos...</title>
<meta name="description" content="Destiny Church International, tiene como visión que cada persona descubra su destino real en Cristo y pueda caminar en el, que cada persona entienda que ha nacido con un propósito y que a través de una experiencia personal con Cristo pueda encontrar esperanza y descubrir cual es su destino real en este mundo." />
<meta name="keywords" content="Dios, Jesús, Cristo, Jesucristo, Espíritu Santo, iglesia, dci, destiny, church, international, destino, oración, misiones, evangelismo, alabanza, adoración" />
<?php include ('includes/header-code.php') ?>
</head>

<body id="videobg">
<?php include_once("analyticstracking.php") ?>
<div class="black-layer"></div>
<div id="loadingPage"><div class="rounded">
<p><img src="images/logo-intro.jpg" style="margin-top:7%;" alt="Destiny Church International" title="Destiny Church International" /></p>
<p>Estamos abriendo destinos...<br /><b>DESCUBRE TU PROPOSITO EN CRISTO &#8224;</b></p><p><img src="images/ajax-loader.gif" alt="loading..." title="loading..." /></p>
<p style="font-size:14px; color:#999;">Centro Comercial Concresa, Nivel T1.<br />
  Municipio Baruta / Caracas - Venezuela 1080</p>
</div></div>

<?php include ('includes/header.php') ?>

<?php include ('includes/menu.php') ?>

<?php include ('includes/footer.php') ?>

<div class="section" id="section0"></div>
<div class="section" id="section1"></div>
<div class="section" id="section2"></div>
<div class="section" id="section3"></div>
<div class="section" id="section4">
    <div class="slide bg-item" id="ss1"></div>
    <div class="slide bg-item" id="ss2"></div>
    <div class="slide bg-item" id="ss3"></div>
    <div class="slide bg-item" id="ss4"></div>
    <div class="slide bg-item" id="ss5"></div>
    <div class="slide bg-item" id="ss6"></div>
</div>
<div class="section" id="section5"></div>
<!-- div class="section" id="section6"></div -->
<div class="section" id="section7"></div>
<div class="section" id="section8"></div>
<div class="section" id="section9"></div>
<div class="section" id="section10"></div>
<div class="section" id="section11"></div>
<div class="section" id="section12"></div>

<?php include ('includes/footer-code.php') ?>
</body>
</html>