<? include("../conexion.php");
   include("../includes/funciones.php"); 

// ACTUALIZACION DE DATOS

if($_GET['act']==2){

$Nombre = mysql_real_escape_string($_POST['nombre']);
$Apellido = mysql_real_escape_string($_POST['apellido']);
$Email = mysql_real_escape_string($_POST['email']);
$Telefono = mysql_real_escape_string($_POST['telefono']);
$Ubicacion = mysql_real_escape_string($_POST['ubicacion']);
$Profesion = mysql_real_escape_string($_POST['profesion']);
$Clave = mysql_real_escape_string($_POST['clave']);

if(($Nombre==NULL) or ($Nombre=='NOMBRE') or ($Apellido==NULL) or ($Apellido=='APELLIDO') or ($Email==NULL) or ($Email=='EMAIL') or ($Telefono==NULL) or ($Telefono=='TELEFONO') or ($Ubicacion==NULL) or ($Ubicacion=='ZONA DONDE VIVE') or ($Profesion==NULL) or ($Profesion=='PROFESION') or ($Clave==NULL)) { 
$mensaje='Llene Todos los Campos';
}
else {
$edit=mysql_query("UPDATE miembros SET nombre='$Nombre',apellido='$Apellido',email='$Email',telefono='$Telefono',ubicacion='$Ubicacion',profesion='$Profesion',clave='$Clave',promos='$_POST[promos]' WHERE idUser='$_GET[id]'");
$mensaje='Registro Actualizado';
  }
}
/*
if($_GET['act']==3){
  if($result=mysql_query("DELETE FROM miembros WHERE idUser='$_GET[id]'")){
  $mensaje='Miembro Eliminado';
  }
}
*/    
if(($_GET['e']==1)){
  $result = mysql_query("SELECT * FROM miembros WHERE idUser='$_GET[id]'");
  $d=mysql_fetch_array($result);
  $action="act=2&id=".$_GET['id'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include ('includes/header-code.php') ?>
</head>

<body>
<?php include ('includes/menu.php') ?>
<div id="content">
<h1 class="shdw">Miembros Registrados (<?php echo cuantos_items('miembros'); ?>)</h1>
<?php if ($_GET['e']) { ?>
<form id="adminForm" name="adminForm" method="post" action="?<?=$action?>">
<br />
<label class="txt-error-msg"><input name="nombre" type="text" class="fields rounded required noPlaceholder" id="nombre" style="background-image:url(../images/icon-avatar.png)" value="<?php if($_GET['e']==1) { echo $d['nombre']; } else { echo 'NOMBRE'; } ?>" onfocus="if (this.value=='NOMBRE') this.value = ''" onblur="if (this.value=='') this.value = 'NOMBRE'" /></label>
<br />
<label class="txt-error-msg"><input name="apellido" type="text" class="fields rounded required noPlaceholder" id="apellido" style="background-image:url(../images/icon-avatar2.png)" value="<?php if($_GET['e']==1) { echo $d['apellido']; } else { echo 'APELLIDO'; } ?>" onfocus="if (this.value=='APELLIDO') this.value = ''" onblur="if (this.value=='') this.value = 'APELLIDO'" /></label>
<br />
<label class="txt-error-msg"><input name="email" type="text" class="fields rounded required email noPlaceholder" id="email" style="background-image:url(../images/icon-email.png)" value="<?php if($_GET['e']==1) { echo $d['email']; } else { echo 'EMAIL'; } ?>" onfocus="if (this.value=='EMAIL') this.value = ''" onblur="if (this.value=='') this.value = 'EMAIL'" /></label>
<br />
<label class="txt-error-msg"><input name="telefono" type="text" class="fields rounded required noPlaceholder" id="telefono" style="background-image:url(../images/icon-phone.png)" value="<?php if($_GET['e']==1) { echo $d['telefono']; } else { echo 'TELEFONO'; } ?>" onfocus="if (this.value=='TELEFONO') this.value = ''" onblur="if (this.value=='') this.value = 'TELEFONO'" /></label>
<br />
<label class="txt-error-msg"><input name="ubicacion" type="text" class="fields rounded required noPlaceholder" id="ubicacion" style="background-image:url(../images/icon-ciudad.png)" value="<?php if($_GET['e']==1) { echo $d['ubicacion']; } else { echo 'ZONA DONDE VIVE'; } ?>" onfocus="if (this.value=='ZONA DONDE VIVE') this.value = ''" onblur="if (this.value=='') this.value = 'ZONA DONDE VIVE'" /></label>
<br />
<label class="txt-error-msg"><input name="profesion" type="text" class="fields rounded required noPlaceholder" id="profesion" style="background-image:url(../images/icon-company2.png)" value="<?php if($_GET['e']==1) { echo $d['profesion']; } else { echo 'PROFESION'; } ?>" onfocus="if (this.value=='PROFESION') this.value = ''" onblur="if (this.value=='') this.value = 'PROFESION'" /></label>
<br />
<label class="txt-error-msg"><input name="clave" type="text" class="fields rounded required noPlaceholder" id="clave" style="background-image:url(../images/icon-pass.png)" value="<?php if($_GET['e']==1) { echo $d['clave']; } else { echo 'CLAVE'; } ?>" maxlength="20" onfocus="if (this.value=='CLAVE') this.value = ''" onblur="if (this.value=='') this.value = 'CLAVE'" /></label>
<br />
<div class="promos-check">
<input name="promos" type="checkbox" id="promos" value="1" <?php if ($d['promos']==1) { echo 'checked="checked"'; } ?> />
Deseo recibir promociones por Email</div>
<input name="button" type="button" class="but2 rounded" id="button" value="Cancelar" onClick="window.location='miembros.php'" />
<input name="button" type="submit" class="but rounded" id="button" value="Actualizar" <? if ($_GET['e']=='') { echo 'disabled="disabled"'; } ?> />
</form>
<?php } else { ?>
<div class="listado">
<?php if ($mensaje) { ?>
<div class="msj"><?php echo $mensaje; ?></div>
<?php echo "<script language=\"javascript\">setTimeout(\"window.location='miembros.php'\",15)</script>"; } ?>
<!-- h2 class="shdw">Miembros Registrados</h2 -->
<?php $buscar=mysql_query("SELECT * FROM miembros ORDER BY nombre ASC");
	while($datos=mysql_fetch_array($buscar)){?>
<div class="list-items2">
<a href="?e=1&id=<?=$datos['idUser']?>"><img src="img/edit.gif" alt="Editar" title="Editar" border="0" align="right" /></a>
<b><?=$datos['nombre']?> <?=$datos['apellido']?></b> &nbsp; - &nbsp; <span class="link3"><?=$datos['email']?></span><br /><u>Ubicación</u>: <?=$datos['ubicacion']?> &nbsp; - &nbsp; Telf: <?=$datos['telefono']?>
</div>
<?php } } ?>
</div>
</div>
<?php include ('includes/footer.php') ?>
</body>
</html>
