<?php 
	$id=$_POST["id"];
	$imag = @$_POST["imagen"];
	$title = $_POST["title"];
	$author = $_POST["author"];
	$tags = $_POST["tags"];
	$timesince = $_POST["timesince"];
	$likes = $_POST["likes"];
	$nocomens = $_POST["nocomens"];
	$fav = @$_POST["fav"];
?>
<article class="post" id="<?= $id ?>">
	<div class="generales">
		<div class="imagen">
			<img src="<?= $imag ?>">
		</div>

		<div class="detalles">
			<h2 class="titulo"><a href="#"><?= $title ?></a></h2>
			<p class="autor">por <a href="#"><?= $author ?></a></p>
			<?php 
				foreach ($tags as $tag) {
					echo "<p class='tags'>$tag <a href=''></a></p>";
				}
			?>
			
			<p class="fecha">hace <strong><?= $timesince ?></strong> min </p>
		</div>
	</div>

	<div class="acciones">
		<div class="votos">
			<a class="likes" href="#"></a>
			<p><?=$likes ?></p>
			<a class="nolikes" href="#"></a>
			</div>
		<div class="comenfavs">
			<a class="comentarios" href="#" id="<?= $id ?>"><?= $nocomens ?></a>
			<span class="nofavoritos" ></span> 
		</div>
	</div>
 </article>
 <script type></script>