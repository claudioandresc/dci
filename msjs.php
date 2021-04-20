<? $texto = $_GET['msj']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Destiny Church International</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='https://fonts.googleapis.com/css?family=Advent+Pro:600' rel='stylesheet' type='text/css'>
<style type="text/css">
body { 
	margin:0px;
	background-color:#eee; /* bbb3cb  a51d8c */
	font-family: 'Advent Pro', Arial, sans-serif;
	font-size:18px;
	color: #333;
}

.link-mas {
	color:#a82159;
	font-weight:bold;
}

h1 {
	margin:0;
	padding-bottom:5px;
	color:#a82159;
	font-size:32px;
	font-weight:bold;
	/*text-transform:uppercase;*/
	text-align:center;
	border-bottom:dotted 1px #999;
	text-shadow: 2px 2px 0px #bbb3cb;
	filter: DropShadow(Color=#bbb3cb,OffX=2,OffY=2,Positive=0);
	filter:progid:DXImageTransform.Microsoft.Shadow(color=#bbb3cb,direction=45,strength=2);
}
</style>
</head>

<body>
  <table width="480" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td height="32" bgcolor="#fff"><h1>Destiny Church International</h1></td>
    </tr>
    <? if ($texto=='olvido1') { ?>
    <tr>
      <td height="160" align="center">  
	  <b>Debes introducir tu Email.</b><br />
	  <p><a href="olvido-datos.php" class="link-mas">Intenta nuevamente</a></p>      </td>
    </tr>
    <? } if ($texto=='olvido2') { ?>
    <tr>
      <td height="160" align="center">  
	  Tu email <u>no est&aacute; registrado</u><br />en nuestro sistema.
	  <p><a href="olvido-datos.php" class="link-mas">Intenta nuevamente</a>&nbsp; &oacute; &nbsp;<a href="registro.php" class="link-mas">Reg&iacute;strate Aqu&iacute;</a></p></td>
    </tr>
    <? } if ($texto=='olvido3') { ?>
    <tr>
      <td height="160" align="center">  
	  <b>Tus datos se enviaron satisfactoriamente</b><br />
	  a tu cuenta de correo electr&oacute;nico.
	  </td>
    </tr>
    <? } if ($texto=='entrar1') { ?>
    <tr>
      <td height="160" align="center">  
	  <strong>(x) ERROR DE INGRESO.</strong><br />
	  Introduce tus datos correctamente.
	  <p><a href="entrar.php" class="link-mas">[Continuar]</a></p>      </td>
    </tr>
    <? } if ($texto=='entrar2') { ?>
    <tr>
      <td height="160" align="center">  
	  <strong>Tus datos de acceso no coinciden.</strong>
	  <p class="link-mas"><a href="entrar.php" class="link-mas">Intenta nuevamente</a> &nbsp; | &nbsp; <a href="olvido-datos.php" class="link-mas">&iquest;Olvid&oacute; sus datos?</a></p>      </td>
    </tr>
    <? } if ($texto=='fmsj1') { ?>
    <tr>
      <td height="160" align="center">  
	  <strong>(x) ERROR DE ENVIO</strong><br />
	  Debe llenar los campos correctamente.</td>
    </tr>
    <? } if ($texto=='fmsj2') { ?>
    <tr>
      <td height="160" align="center">  
	  <strong>HEMOS RECIBIDO SU MENSAJE.</strong><br />
	  Muchas Gracias.</td>
    </tr>
    <? } ?>
  </table>
</body>
</html>
