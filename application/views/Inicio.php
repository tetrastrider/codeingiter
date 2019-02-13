
<body>
<a href="inicio"><span class="logo"></span></a>
<nav>
	<a href="inicio">Inicio</a>
	<a href="noticias" id="activo">Noticias</a>
	<a href="acerca">Doctores</a>
	<a href="servicios">Servicios</a>

	<a href="contacto" title='hacer una cita' id='cita'>hacer una cita</a>
	
</nav>
</header>

<section>
<article>
<?php foreach ($contenido->result() as $ban): ?>

 
	
 <div class="articulo"> <h2 title="<?= $ban->titulo; ?>"><?= $ban->titulo; ?></h2><img src="<?= $ban->foto; ?>" class="imart"/><small><?= $ban->publicado; ?></small>
 <div class="descrip">   <div class='contenido'><p><?= filter_var(trim(substr($ban->contenido,0,400)),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH); ?></p></div> <div class="leer"><a href="/noticias?i=<?= $ban->id; ?>" title="leer mas">leer mas</a> </div> </div> </div>
<?php endforeach; ?>
	
</article>

<aside>
<form name="buscador" action="noticias">
		<input type="text" name="b" placeholder="Buscar:"/>
	</form>
<div class="cat">
	<h5>categorias</h5>
	 <?php foreach($cat->result() as $cate): ?>
	 <a href="/noticias?c=<?= $cate->categoria;?>"><p><?= $cate->categoria;?></p></a>
	<?php endforeach; ?>
	  <a href="/noticias"><p>todas</p></a> </div>

<div id='ultimas'>
<h5>ultimas noticias</h5>
<?php foreach($ultimas->result() as $ult):?>

	 <a href="/noticias?i=<?= $ult->id?>">
	<div id='ult'>
		<img src="<?= $ult->foto; ?>" id='ultimg'>
		<h6 title='dimelo'><?= $ult->titulo; ?></h6>
		<small><?=$ult->publicado;?></small>
	
	</div></a>
	 <?php endforeach; ?>
</div>

<div class="combello"> <h5>ultimos comentarios</h5>
<?php foreach($comentarios->result() as $com):?>
  <a href="/noticias?i=<?=$com->id;?>"><div class="comecont"> <img src="<?= $com->foto ;?>" class="fotocom"/><p><?= substr($com->comentario,0,250);?></p>
<small><?=$com->publicado;?></small>
</div></a>
<?php endforeach; ?>
</div>
</aside>
</section>
</body> 
</html>