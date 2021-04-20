<?php 

$capeta = '../galeria/';
$carpetacont = glob($capeta.'*',GLOB_ONLYDIR);
//$carpetanum = count($carpetacont);
//$fotos = array();
//$carpetatypes = glob($carpetacont."{*.jpg,*.jpeg,*.gif,*.png}",GLOB_BRACE);
//$listImages=array();
//if ($carpetafiles === '.' or $carpetafiles === '..') continue;
//$carpetascan = array_diff(scandir($capeta), array('..', '.')); // Scanea la carpeta y quita los puntos de directorios raiz

foreach ($carpetacont as $carpetas) { ?>

<script type="text/javascript">
$(".<?php echo substr_replace($carpetas, '', 0, 11); ?>").click(function() {
    $.fancybox.open([

<?php
	$opcarpeta = opendir( $carpetas );
	while( false !== ( $foto = readdir( $opcarpeta ) ) )  {
	echo '{ href : "'.$carpetas.'/'.$foto.'" },';
	}
?>
    ], {
        padding : 5
    }); 
    return false;
});
</script>

<?php 

}

?>
<div class="content-in">
<h1>Galería</h1>
<div class="content-scroll">
<?php foreach ($carpetacont as $carpetagal) { ?>
<div class="item-gal">
<a href="javascript:;" class="<?php echo substr_replace($carpetagal, '', 0, 11); ?>"><img src="<?php echo $carpetagal; ?>/f1.jpg" /></a>
<strong class="shdw"><?php echo substr_replace($carpetagal, '', 0, 11) ?></strong>
</div>
<?php } ?>
</div>
</div>
