<div class="content-in">
<h1>
<div id="t-icons">
<a href="javascript:;" id="ti1"><img src="images/ico-address.png" /></a>
<a href="javascript:;" id="ti2"><img src="images/ico-pencil.png" /></a>
</div>
Contáctenos</h1>
<div class="content-scroll">

<div id="direccion">
<p>Centro Comercial Concresa, Nivel T1.<br />
Municipio Baruta.<br />
Caracas - Venezuela 1080.<br /><br />
Email: dcicaracas@gmail.com</p>
</div>

<div id="formcontacto">
<form id="contactForm" name="contactForm" method="post" action="?act=fm1">
<input name="nombre" type="text" class="fields2 rounded required <?php if($_GET) { echo ''; } else { echo 'noPlaceholder'; } ?>" id="nombre" value="<?php if($_GET) { echo $_GET['vn'].' '.$_GET['va']; } else { echo 'NOMBRE *'; } ?>" onfocus="if (this.value=='NOMBRE *') this.value = ''" onblur="if (this.value=='') this.value = 'NOMBRE *'" /> <br />
<input name="email" type="text" class="fields2 rounded required email <?php if($_GET) { echo ''; } else { echo 'noPlaceholder'; } ?>" id="email" value="<?php if($_GET) { echo $_GET['ve']; } else { echo 'EMAIL *'; } ?>" onfocus="if (this.value=='EMAIL *') this.value = ''" onblur="if (this.value=='') this.value = 'EMAIL *'" /> <br />
<input name="telefono" type="text" class="fields2 rounded" id="telefono" value="<?php if($_GET) { echo $_GET['vt']; } else { echo 'TELEFONO'; } ?>" onfocus="if (this.value=='TELEFONO') this.value = ''" onblur="if (this.value=='') this.value = 'TELEFONO'" /> <br />
<textarea name="comentarios" id="comentarios" cols="45" rows="6" class="fields2 rounded required noPlaceholder" onfocus="if (this.value=='COMENTARIOS *') this.value = ''" onblur="if (this.value=='') this.value = 'COMENTARIOS *'">COMENTARIOS *</textarea> <br />
<input type="submit" name="button" id="button" value="ENVIAR" class="but2 rounded" />
</form>
</div>

</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $("#contactForm").validate();
});

$.validator.addMethod(
  'noPlaceholder', function (value, element) {
	  return value !== element.defaultValue;
  }, ' *Requerido'
);

$('#ti1').click(function(){
$("#formcontacto").delay(100).fadeOut(300);
$("#direccion").delay(500).fadeIn('slow');
});

$('#ti2').click(function(){
$("#direccion").delay(100).fadeOut(300);
$("#formcontacto").delay(500).fadeIn('slow');
});
</script>