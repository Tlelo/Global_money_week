<?php 
	// define se define constantes para el acceso de archivo
	require_once "./app/define.php";
	require_once LAYOUT . "head.php";
	require_once LAYOUT . "header.php";
?>
<main>
	<section class="container">

		<div class="row">
			<div class="span1">
				<h1>Cartelera de actividades</h1>
			</div>
			<div class="span2">
				<p>Planear es una habilidad financiera vital. Así, planificar tu participación en el GMW será muy importante para que no te pierdas de nada: consulta o descarga la cartelera de actividades disponibles, organiza tu agenda y participa en tantas como tú desees.</p>
			</div>
		</div>
	
		<section class="btn_proximamente">
			<img src="<?php echo IMG;?>btn_proximamente.png" alt="">
		</section>
		

		<p>Te esperamos en el MIDE, en las fechas del Global Money Week tendrás acceso a una promoción especial.</p>

		<p>Descárgala aquí.</p>

	</section>

	<img src="./img/bg_cartelera.png" class="bg_desk" alt="">
	<img src="./img/bg_cartelera_movil.png" class="bg_movil" alt="">
</main>

<footer>
	<?php require_once LAYOUT . "footer.php"; ?>
</footer>

<script src="./js/index.js" type="module"></script>

</body>
</html>
