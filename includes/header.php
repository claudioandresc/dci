<div id="header">
<div id="top-items">
<?php if ($_SESSION['dci']) { ?>
<div id="user" style="color:#eee;"><b style="color:#fff;">Bienvenid@ <?php echo $_SESSION['dci']; ?></b> &nbsp; | &nbsp; <a href="registro.php?e=1&id=<?php echo $_SESSION['idU']; ?>" class="regframe"><img src="images/icon-profile.png" alt="Actualiza tus datos" border="0" align="absmiddle" title="Actualiza tus datos" /></a> &nbsp; | &nbsp; <a href="index.php?logout=1"><img src="images/icon-salir.png" alt="Salir - Cerrar Sesión" border="0" align="absmiddle" title="Salir - Cerrar Sesión" /></a></div>
<?php } else { ?>
<div id="user"><a href="registro.php" class="regframe"><img src="images/ico-registro.png" align="absmiddle" border="0" alt="Registrate" title="Registrate" />&nbsp; Regístrate</a> &nbsp; | &nbsp; <a href="entrar.php" class="enterframe">Entrar &nbsp;<img src="images/ico-enter.png" align="absmiddle" border="0" alt="Entrar" title="Entrar" /></a></div>
<?php } ?>
<a href="#anuncios">Anuncios</a> &nbsp; | &nbsp; <a href="#predicas">Predicas</a> &nbsp; | &nbsp; <a href="onlinetv/index.html" class="envivo">Señal en Vivo <img src="images/ico-sound.png" align="absmiddle" border="0" alt="onLine" title="onLine" /></a>
</div>
</div>