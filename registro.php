<?php 
include("conexion.php"); 
include("includes/funciones.php");
session_start();

if ($_GET['id']!=$_SESSION['idU']) {
	echo '<script language="javascript">parent.location="index.php"</script>';
}

if($_GET['act']==1){

$Nombre = mysql_real_escape_string($_POST['nombre']);
$Apellido = mysql_real_escape_string($_POST['apellido']);
$Email = mysql_real_escape_string($_POST['email']);
$Telefono = mysql_real_escape_string($_POST['telefono']);
$Ubicacion = mysql_real_escape_string($_POST['ubicacion']);
$Profesion = mysql_real_escape_string($_POST['profesion']);
$Clave = mysql_real_escape_string($_POST['clave']);

if(($Nombre==NULL) or ($Nombre=='NOMBRE') or ($Apellido==NULL) or ($Apellido=='APELLIDO') or ($Email==NULL) or ($Email=='EMAIL') or ($Telefono==NULL) or ($Telefono=='TELEFONO') or ($Ubicacion==NULL) or ($Ubicacion=='ZONA DONDE VIVE') or ($Profesion==NULL) or ($Profesion=='PROFESION') or ($Clave==NULL)) { $msj=1; }
elseif (existe_email($Email)==1) { $msj=2; }
else {
$insertQuery=mysql_query("INSERT INTO miembros (nombre,apellido,email,telefono,ubicacion,profesion,clave,promos) VALUES ('$Nombre','$Apellido','$Email','$Telefono','$Ubicacion','$Profesion','$Clave','$_POST[promos]')");

// INICIO CORREO
												
$to = "";
$asunto = "";
$msg = "";
$encabezado = "";

$to = $Email;
$asunto = "Su REGISTRO en Destiny Church International";

$msg.= "<html><body>";
$msg.= "<table width='100%' border='0' cellpadding='30' cellspacing='0' align='center' bgcolor='#ffffff'><tr><td align='center'>";
$msg.= "<table width='640' border='0' cellpadding='0' cellspacing='0' align='center' style='font-family:verdana;font-size:12px;'>";
$msg.= "<tr><td valign='bottom'><a href='http://www.dcicaracas.com.ve' target='_blank'>";
$msg.= "<img src='http://www.dcicaracas.com.ve/images/emails/head-email.jpg' border='0' /></a></td></tr>";
$msg.= "<tr><td style='padding:0px 40px; color:#666666;'><b style='color:#a51d8c;'>Bendiciones ".$Nombre.",</b><br />";
$msg.= "Bienvenid@ a <b>Destiny Church International</b>.<br /><br />";
$msg.= "Gracias por registrarte con nosotros.<br />";
$msg.= "Ahora estas en nuestro c&iacute;rculo de oraci&oacute;n y podr&aacute;s estar al tanto de todas nuestras actividades y eventos.";
$msg.= "<p>Te recordamos tus datos de acceso:<br />";
$msg.= "<b>- EMAIL:</b>  ".$Email."<br />";
$msg.= "<b>- CLAVE:</b>  ".$Clave."</p>";
$msg.= "<p>Te recomendamos tenerlos a la mano para cuando nos visites.<br />Dios te bendiga abundantemente.<br /><br />";
$msg.= "<a href='http://www.dcicaracas.com.ve' target='_blank' style='text-decoration:none;'><b>Destiny Church International</b></a></p></td></tr>";
$msg.= "<tr><td valign='top'><img src='http://www.dcicaracas.com.ve/images/emails/footer-email.jpg' /></td></tr></table>";
$msg.= "</td></tr></table></body></html>";

$encabezado = "From: DCICaracas.com\r\n";
// $encabezado.= "Bcc: info@dcicaracas.com\r\n";
$encabezado.= 'MIME-Version: 1.0' . "\r\n";
$encabezado.= 'Content-type:text/html; charset=utf-8' . "\r\n";

mail($to, $asunto, $msg, $encabezado);

// FIN CORREO
  
$msj=3;

  }
}


// ACTUALIZACION DE DATOS DEL CLIENTE

if($_GET['act']==2){

$Nombre = mysql_real_escape_string($_POST['nombre']);
$Apellido = mysql_real_escape_string($_POST['apellido']);
$Email = mysql_real_escape_string($_POST['email']);
$Telefono = mysql_real_escape_string($_POST['telefono']);
$Ubicacion = mysql_real_escape_string($_POST['ubicacion']);
$Profesion = mysql_real_escape_string($_POST['profesion']);
$Clave = mysql_real_escape_string($_POST['clave']);

if(($Nombre==NULL) or ($Nombre=='NOMBRE') or ($Apellido==NULL) or ($Apellido=='APELLIDO') or ($Email==NULL) or ($Email=='EMAIL') or ($Telefono==NULL) or ($Telefono=='TELEFONO') or ($Ubicacion==NULL) or ($Ubicacion=='ZONA DONDE VIVE') or ($Profesion==NULL) or ($Profesion=='PROFESION') or ($Clave==NULL)) { $msj=1; }
else {
$edit=mysql_query("UPDATE miembros SET nombre='$Nombre',apellido='$Apellido',email='$Email',telefono='$Telefono',ubicacion='$Ubicacion',profesion='$Profesion',clave='$Clave',promos='$_POST[promos]' WHERE idUser='$_GET[id]'");

// INICIO CORREO
												
$to = "";
$asunto = "";
$msg = "";
$encabezado = "";

$to = $Email;
$asunto = "Haz actualizado tus datos en Destiny Church International";

$msg.= "<html><body>";
$msg.= "<table width='100%' border='0' cellpadding='30' cellspacing='0' align='center' bgcolor='#ffffff'><tr><td align='center'>";
$msg.= "<table width='640' border='0' cellpadding='0' cellspacing='0' align='center' style='font-family:verdana;font-size:12px;'>";
$msg.= "<tr><td valign='bottom'><a href='http://www.dcicaracas.com.ve' target='_blank'>";
$msg.= "<img src='http://www.dcicaracas.com.ve/images/emails/head-email.jpg' border='0' /></a></td></tr>";
$msg.= "<tr><td style='padding:0px 40px; color:#666666;'><b style='color:#a51d8c;'>Bendiciones ".$Nombre.".</b><br /><br />";
$msg.= "Tu informaci&oacute;n de registro en <b>Destiny Church International</b> se actualiz&oacute; exitosamente.<br />";
$msg.= "Para acceder a tu cuenta, recuerda tus datos:<br /><br />";
$msg.= "<b>- EMAIL:</b>  ".$Email."<br />";
$msg.= "<b>- CLAVE:</b>  ".$Clave."<br /><br />";
$msg.= "Te recomendamos tenerlos a la mano para cuando nos visites.<br />Dios te bendiga abundantemente.<br /><br />";
$msg.= "<a href='http://www.dcicaracas.com.ve' target='_blank' style='text-decoration:none;'><b>Destiny Church International</b></a></td></tr>";
$msg.= "<tr><td valign='top'><img src='http://www.dcicaracas.com.ve/images/emails/footer-email.jpg' /></td></tr></table>";
$msg.= "</td></tr></table></body></html>";

$encabezado = "From: DCICaracas.com\r\n";
//$encabezado.= "Bcc: info@dcicaracas.com\r\n";
$encabezado.= 'MIME-Version: 1.0' . "\r\n";
$encabezado.= 'Content-type:text/html; charset=utf-8' . "\r\n";

mail($to, $asunto, $msg, $encabezado);

// FIN CORREO

$msj=4;

  }
}

if(($_GET['e']==1) and ($_SESSION['dci']!="") and ($_SESSION['idU']==$_GET['id'])){
  $result = mysql_query("SELECT * FROM miembros WHERE idUser='$_GET[id]'");
  $d=mysql_fetch_array($result);
  $action="act=2&id=".$_GET['id'];
}  
else{
  $action="act=1";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro - Destiny Church International</title>
<link href='https://fonts.googleapis.com/css?family=Advent+Pro:600' rel='stylesheet' type='text/css'>
<link href="css/forms.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery-validate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#registro").validate({
      rules: {
            clave1: 'required',
            clave: {
                  required: true,
                  equalTo: '#clave1'
            }
      }});
	  
	 $('#clave1').focus(
      function(){
        $(this).css('background-image', 'url(images/icon-pass.png)');
    });

    $('#clave1').blur(
      function(){
        if ($(this).prop('type', 'password').val()=='') {
		$(this).css('background-image', 'url(images/input-pass-txt.png)');
		}
    });
	
	$('#clave').focus(
      function(){
        $(this).css('background-image', 'url(images/icon-pass2.png)');
    });

    $('#clave').blur(
      function(){
        if ($(this).prop('type', 'password').val()=='') {
		$(this).css('background-image', 'url(images/input-pass-txt2.png)');
		}
    });
	  
  });

<?php if ($_SESSION['dci']=="") { ?>
$.validator.addMethod(
    'noPlaceholder', function (value, element) {
        return value !== element.defaultValue;
    }, 'Introduzca un valor'
);
<? } ?>
</script>
</head>

<body>
<form id="registro" name="registro" method="post" action="?<?=$action?>">
  <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
    <?php if ((($_GET['act']==1) || ($_GET['act']==2)) && ($msj==1)) { ?>
    <tr>
      <td height="10"></td>
    </tr>
    <tr>
      <td height="200" align="center" valign="middle" class="txt" bgcolor="">
      <b>(x) REGISTRO FALLIDO.</b><br />
	  Debes llenar correctamente <u>todos</u> los campos.
	  <p><a href="<?php if ($_SESSION['dci']) { echo 'registro.php?e=1&id='.$_SESSION['idU']; } else { echo 'registro.php'; } ?>" class="link">Intenta nuevamente</a></p>
      </td>
    </tr>
    <?php } elseif (($_GET['act']==1) && ($msj==2)) { ?>
    <tr>
      <td height="10"></td>
    </tr>
    <tr>
      <td height="200" align="center" valign="middle" class="txt" bgcolor="">
      <b>(x) REGISTRO FALLIDO.</b><br /><br />
      Tu <u>email ya esta registrado</u><br />
      en nuestro sistema.
      <p><a href="olvido-datos.php" class="link">&iquest;Olvid&oacute; sus datos?</a> &nbsp; | &nbsp; 
      <a href="registro.php" class="link3">Intenta nuevamente</a></p> 
      </td>
    </tr>
    <?php } elseif (($_GET['act']==1) && ($msj==3)) { ?>
    <tr>
      <td height="10"></td>
    </tr>
    <tr>
      <td height="200" align="center" valign="middle" class="txt" bgcolor="">
      <b>&iexcl;REGISTRO EXITOSO!</b><br /><br />
	  Ahora estar&aacute;s al tanto de todas nuestras<br />
      actividades y eventos.<br />
	  <p><a href="entrar.php" class="link"><strong>Entrar ahora &raquo;</strong></a></p>
      </td>
    </tr>
    <?php } elseif (($_GET['act']==2) && ($msj==4)) { ?>
    <tr>
      <td height="10"></td>
    </tr>
    <tr>
      <td height="200" align="center" valign="middle" class="txt" bgcolor="">
      <b>DATOS ACTUALIZADOS.</b><br />
	  Tus datos se han actualizado exitosamente.<br />
	  <p><a href="javascript:;" class="link" onclick="parent.$.fancybox.close();">[Continuar]</a></p>
      </td>
    </tr>
    <? } else { ?>
    <tr>
      <td><h1>Datos de Registro</h1></td>
    </tr>
    <tr>
      <td height="10"></td>
    </tr>
    <tr>
      <td align="center" class="txt-error-msg"><input name="nombre" type="text" class="fields rounded required noPlaceholder" id="nombre" style="background-image:url(images/icon-avatar.png)" value="<?php if ($_SESSION['dci']!="") { echo $d['nombre']; } else { echo 'NOMBRE'; } ?>" onfocus="if (this.value=='NOMBRE') this.value = ''" onblur="if (this.value=='') this.value = 'NOMBRE'" /></td>
    </tr>
    <tr>
      <td align="center" class="txt-error-msg"><input name="apellido" type="text" class="fields rounded required noPlaceholder" id="apellido" style="background-image:url(images/icon-avatar2.png)" value="<?php if ($_SESSION['dci']!="") { echo $d['apellido']; } else { echo 'APELLIDO'; } ?>" onfocus="if (this.value=='APELLIDO') this.value = ''" onblur="if (this.value=='') this.value = 'APELLIDO'" /></td>
    </tr>
    <tr>
      <td align="center" class="txt-error-msg"><input name="email" type="text" class="fields rounded required email noPlaceholder" id="email" style="background-image:url(images/icon-email.png)" value="<?php if ($_SESSION['dci']!="") { echo $d['email']; } else { echo 'EMAIL'; } ?>" onfocus="if (this.value=='EMAIL') this.value = ''" onblur="if (this.value=='') this.value = 'EMAIL'" /></td>
    </tr>
    <tr>
      <td align="center" class="txt-error-msg"><input name="telefono" type="text" class="fields rounded required noPlaceholder" id="telefono" style="background-image:url(images/icon-phone.png)" value="<?php if ($_SESSION['dci']!="") { echo $d['telefono']; } else { echo 'TELEFONO'; } ?>" onfocus="if (this.value=='TELEFONO') this.value = ''" onblur="if (this.value=='') this.value = 'TELEFONO'" /></td>
    </tr>
    <tr>
      <td align="center" class="txt-error-msg"><input name="ubicacion" type="text" class="fields rounded required noPlaceholder" id="ubicacion" style="background-image:url(images/icon-ciudad.png)" value="<?php if ($_SESSION['dci']!="") { echo $d['ubicacion']; } else { echo 'ZONA DONDE VIVE'; } ?>" onfocus="if (this.value=='ZONA DONDE VIVE') this.value = ''" onblur="if (this.value=='') this.value = 'ZONA DONDE VIVE'" /></td>
    </tr>
    <tr>
      <td align="center" class="txt-error-msg"><input name="profesion" type="text" class="fields rounded required noPlaceholder" id="profesion" style="background-image:url(images/icon-company2.png)" value="<?php if ($_SESSION['dci']!="") { echo $d['profesion']; } else { echo 'PROFESION'; } ?>" onfocus="if (this.value=='PROFESION') this.value = ''" onblur="if (this.value=='') this.value = 'PROFESION'" /></td>
    </tr>
    <tr>
      <td align="center" class="txt-error-msg"><input name="clave1" type="password" class="fields rounded required noPlaceholder" id="clave1" style="background-image:<?php if ($_SESSION['dci']!="") { echo 'url(images/icon-pass.png)'; } else { echo 'url(images/input-pass-txt.png)'; } ?>" value="<?php if ($_SESSION['dci']!="") { echo $d['clave']; } ?>" maxlength="20" /></td>
    </tr>
    <tr>
      <td align="center" class="txt-error-msg"><input name="clave" type="password" class="fields rounded required noPlaceholder" id="clave" style="background-image:<?php if ($_SESSION['dci']!="") { echo 'url(images/icon-pass2.png)'; } else { echo 'url(images/input-pass-txt2.png)'; } ?>" value="<?php if ($_SESSION['dci']!="") { echo $d['clave']; } ?>" maxlength="20" /></td>
    </tr>
    <tr>
    	<td align="center" class="txt" style="padding-top:7px; padding-bottom:15px;">
<input name="promos" type="checkbox" id="promos" value="1" <?php if (($_SESSION['dci']!="") && ($d['promos']==0)) { echo ''; } else { echo 'checked="checked"'; } ?> /> Deseo recibir información por Email
        </td>
    </tr>
    <tr>
      <td align="center"><input name="button" type="submit" class="but rounded" id="button" value="<?php if ($_SESSION['dci']) { echo 'Actualizar'; } else { echo 'Enviar'; } ?>" <? if ($_SESSION['idU']!=$_GET['id']) { echo 'disabled="disabled"'; } ?> /></td>
    </tr>
  </table>
  <?php } ?>
</form>
</body>
</html>
