<div class="content-in">
<h1>Escríbele al Pastor</h1>
<div class="content-scroll">
<form id="alpastorForm" name="alpastorForm" method="post" action="?act=fm3">
<input name="nombre" type="text" class="fields2 rounded required <?php if($_GET) { echo ''; } else { echo 'noPlaceholder'; } ?>" id="nombre" value="<?php if($_GET) { echo $_GET['vn'].' '.$_GET['va']; } else { echo 'NOMBRE *'; } ?>" onfocus="if (this.value=='NOMBRE *') this.value = ''" onblur="if (this.value=='') this.value = 'NOMBRE *'" /> <br />
<input name="email" type="text" class="fields2 rounded required email <?php if($_GET) { echo ''; } else { echo 'noPlaceholder'; } ?>" id="email" value="<?php if($_GET) { echo $_GET['ve']; } else { echo 'EMAIL *'; } ?>" onfocus="if (this.value=='EMAIL *') this.value = ''" onblur="if (this.value=='') this.value = 'EMAIL *'" /> <br />
<input name="telefono" type="text" class="fields2 rounded" id="telefono" value="<?php if($_GET) { echo $_GET['vt']; } else { echo 'TELEFONO'; } ?>" onfocus="if (this.value=='TELEFONO') this.value = ''" onblur="if (this.value=='') this.value = 'TELEFONO'" /> <br />
<input name="zona" type="text" class="fields2 rounded" id="zona" value="<?php if($_GET) { echo $_GET['vu']; } else { echo 'ZONA DONDE VIVE'; } ?>" onfocus="if (this.value=='ZONA DONDE VIVE') this.value = ''" onblur="if (this.value=='') this.value = 'ZONA DONDE VIVE'" /> <br />
<textarea name="peticion" id="peticion" cols="45" rows="5" class="fields2 rounded required noPlaceholder" onfocus="if (this.value=='COMENTARIOS *') this.value = ''" onblur="if (this.value=='') this.value = 'COMENTARIOS *'">COMENTARIOS *</textarea> <br />
<input type="submit" name="button" id="button" value="ENVIAR" class="but2 rounded" />
</form>
</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $("#alpastorForm").validate();
});

$.validator.addMethod(
  'noPlaceholder', function (value, element) {
	  return value !== element.defaultValue;
  }, ' *Requerido'
);
</script>