<?php 
if (isset($_GET)) { $carpeta = '../galeria/'.$_GET['f'].'/'; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galeria DCI</title>
<link href="../fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../fancybox/jquery.fancybox.pack.js"></script>
<style type="text/css">
a.gal-fancybox {
	text-decoration:none;
	border:none;
	outline:none;
}

.gal-fancybox img {
	float:left;
	margin-right:3%;
	margin-bottom:4%;
	height:140px;
	border:solid 1px #fff;
}

.gal-fancybox img:hover {
	border:dashed 1px #fff;
}
</style>
</head>

<body>
<?php 
$imgdir = $carpeta; //Pick your folder
$allowed_types = array('png','jpg','jpeg','gif'); //Allowed types of files
$dimg = opendir($imgdir);//Open directory

while($imgfile = readdir($dimg))
{
  if( in_array(strtolower(substr($imgfile,-3)),$allowed_types) OR
	  in_array(strtolower(substr($imgfile,-4)),$allowed_types) )
/*If the file is an image add it to the array*/
  {$a_img[] = $imgfile;}
}

sort($a_img);
$totimg = count($a_img);  //The total count of all the images
?>

<script type="text/javascript">
$.fancybox.open([

<?php
for($x=0; $x < $totimg; $x++) {
	 echo '{ href : "'.$imgdir.$a_img[$x].'" },';
	 }
?>
], {
    padding : 0   
});
</script>

</body>
</html>