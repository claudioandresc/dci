<?php
session_start();

if (isset($_GET)) {
	$vm = $_GET['mf'];
}

if ($_GET['act']=='fm1') {

if (($_POST['nombre']==NULL) or ($_POST['nombre']=='NOMBRE *') or ($_POST['email']==NULL) or ($_POST['email']=='EMAIL *') or ($_POST['comentarios']==NULL) or ($_POST['comentarios']=='COMENTARIOS *')) { 
	echo '<script type="text/javascript">window.location="msjs.php?msj=fmsj1"</script>';
}

else {

$to = "";
$asunto = "";
$msg = "";
$encabezado = "";

$to = "dcicaracas@gmail.com";
$asunto = "Contacto de ".$_POST['nombre']." desde DCI web";
						
$msg.= "- NOMBRE:  ".$_POST['nombre']."\n";
$msg.= "- E-MAIL:  ".$_POST['email']."\n";
$msg.= "- TELEFONO:  ".$_POST['telefono']."\n";
$msg.= "- COMENTARIOS:  ".$_POST['comentarios']."\n";

$encabezado = "From:".$_POST['email']."\r\n";
$encabezado.= "Bcc:josueprada@dcicaracas.com.ve  \r\n"; // eymarprada@yahoo.com, josueprada@gmail.com, josueprada@dcicaracas.com.ve

mail($to, $asunto, $msg, $encabezado);

echo '<script type="text/javascript">window.location="msjs.php?msj=fmsj2"</script>';

	}
}


if ($_GET['act']=='fm2') {

if (($_POST['nombre']==NULL) or ($_POST['nombre']=='NOMBRE *') or ($_POST['email']==NULL) or ($_POST['email']=='EMAIL *') or ($_POST['comentarios']==NULL) or ($_POST['comentarios']=='ORAR POR... *')) { 
	echo '<script type="text/javascript">window.location="msjs.php?msj=fmsj1"</script>';
}

else {

$to = "";
$asunto = "";
$msg = "";
$encabezado = "";

$to = "dcicaracas@gmail.com";
$asunto = "Petición de Oración de ".$_POST['nombre']." desde DCI web";
						
$msg.= "- NOMBRE:  ".$_POST['nombre']."\n";
$msg.= "- E-MAIL:  ".$_POST['email']."\n";
$msg.= "- DESDE:  ".$_POST['zona']."\n";
$msg.= "- PETICION:  ".$_POST['comentarios']."\n";

$encabezado = "From:".$_POST['email']."\r\n";
$encabezado.= "Bcc:josueprada@dcicaracas.com.ve, zoritamol@gmail.com, marissielu@gmail.com   \r\n";

mail($to, $asunto, $msg, $encabezado);

echo '<script type="text/javascript">window.location="msjs.php?msj=fmsj2"</script>';

	}
}


if($_GET['act']=='fm3') {

if (($_POST['nombre']==NULL) or ($_POST['nombre']=='NOMBRE *') or ($_POST['email']==NULL) or ($_POST['email']=='EMAIL *') or ($_POST['comentarios']==NULL) or ($_POST['comentarios']=='MENSAJE *')) { 
	echo '<script type="text/javascript">window.location="msjs.php?msj=fmsj1"</script>';
}

else {

$to = "";
$asunto = "";
$msg = "";
$encabezado = "";

$to = "josueprada@dcicaracas.com.ve";
$asunto = "Mensaje al Pastor de ".$_POST['nombre']." desde DCI web";
						
$msg.= "- NOMBRE:  ".$_POST['nombre']."\n";
$msg.= "- E-MAIL:  ".$_POST['email']."\n";
$msg.= "- TELEFONO:  ".$_POST['telefono']."\n";
$msg.= "- DESDE:  ".$_POST['zona']."\n";
$msg.= "- MENSAJE:  ".$_POST['comentarios']."\n";

$encabezado = "From:".$_POST['email']."\r\n";
$encabezado.= "Bcc: \r\n";

mail($to, $asunto, $msg, $encabezado);

echo '<script type="text/javascript">window.location="msjs.php?msj=fmsj2"</script>';

	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Envíe su Mensaje</title>
<link href='https://fonts.googleapis.com/css?family=Advent+Pro:600' rel='stylesheet' type='text/css' />
<link href="css/forms.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery-validate.js"></script>
</head>

<body>
<form id="mensajeForm" name="mensajeForm" method="post" action="?act=fm<?php echo $vm ?>">
<table width="400" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td align="center"><h1><?php if($vm==1) { echo 'Contáctenos'; } elseif($vm==2) { echo 'Petición de Oración'; } elseif($vm==3) { echo 'Escríbele al Pastor'; } ?></h1></td>
  </tr>
  <tr>
      <td colspan="2" height="10"></td>
    </tr>
  <tr>
    <td align="center" class="txt-error-msg"><input name="nombre" type="text" class="fields rounded required <?php if ($_SESSION) { echo ''; } else { echo 'noPlaceholder'; } ?>" style="padding-left:10px;" id="nombre" value="<?php if ($_SESSION) { echo $_SESSION['nombre'].' '.$_SESSION['apellido']; } else { echo 'NOMBRE *'; } ?>" onfocus="if (this.value=='NOMBRE *') this.value = ''" onblur="if (this.value=='') this.value = 'NOMBRE *'" /></td>
  </tr>
  <tr>
    <td align="center" class="txt-error-msg"><input name="email" type="text" class="fields rounded required email  <?php if ($_SESSION) { echo ''; } else { echo 'noPlaceholder'; } ?>" style="padding-left:10px;" id="email" value="<?php if ($_SESSION) { echo $_SESSION['email']; } else { echo 'EMAIL *'; } ?>" onfocus="if (this.value=='EMAIL *') this.value = ''" onblur="if (this.value=='') this.value = 'EMAIL *'" /></td>
  </tr>
  <?php if ($vm==1 || $vm==3) { ?>
  <tr>
    <td align="center" class="txt-error-msg"><input name="telefono" type="text" class="fields rounded" style="padding-left:10px;" id="telefono" value="<?php if ($_SESSION) { echo $_SESSION['telefono']; } else { echo 'TELEFONO'; } ?>" onfocus="if (this.value=='TELEFONO') this.value = ''" onblur="if (this.value=='') this.value = 'TELEFONO'" /></td>
  </tr>
  <?php } if ($vm==2 || $vm==3) { ?>
  <tr>
    <td align="center" class="txt-error-msg"><input name="zona" type="text" class="fields rounded" style="padding-left:10px;" id="zona" value="<?php if ($_SESSION) { echo $_SESSION['ubicacion']; } else { echo 'ZONA DONDE VIVE'; } ?>" onfocus="if (this.value=='ZONA DONDE VIVE') this.value = ''" onblur="if (this.value=='') this.value = 'ZONA DONDE VIVE'" /></td>
  </tr>
  <?php } ?>
  <tr>
    <td align="center" class="txt-error-msg"><textarea name="comentarios" id="comentarios" cols="45" rows="7" class="fields rounded required noPlaceholder" style="padding-left:10px;" onfocus="if (this.value=='<?php if($vm==1) { echo 'COMENTARIOS *'; } elseif($vm==2) { echo 'ORAR POR... *'; } elseif($vm==3) { echo 'MENSAJE *'; } ?>') this.value = ''" onblur="if (this.value=='') this.value = '<?php if($vm==1) { echo 'COMENTARIOS *'; } elseif($vm==2) { echo 'ORAR POR... *'; } elseif($vm==3) { echo 'MENSAJE *'; } ?>'"><?php if($vm==1) { echo 'COMENTARIOS *'; } elseif($vm==2) { echo 'ORAR POR... *'; } elseif($vm==3) { echo 'MENSAJE *'; } ?></textarea></td>
  </tr>
  <tr>
    <td align="center"><input type="submit" name="button" id="button" value="ENVIAR" class="but rounded" /></td>
  </tr>
</table>
</form>

<script type="text/javascript">
$(document).ready(function(){
  $("#mensajeForm").validate();
});

$.validator.addMethod(
  'noPlaceholder', function (value, element) {
	  return value !== element.defaultValue;
  }, ' *Requerido'
);
</script>
</body>
</html>