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
				<h1>Recursos Educativos</h1>
			</div>
			<div class="span2">
				<p>Investigar y compartir también son habilidades financieras muy importantes.</p>

				<p>Explora los recursos digitales que los líderes de educación financiera han preparado para ti, si encuentras algo que llame tu atención compártelo en tus redes sociales y contribuye a que más personas tengan acceso a esta información.</p>
			</div>
		</div>

		<section class="btn_proximamente">
			<img src="<?php echo IMG;?>btn_proximamente.png" alt="">
		</section>

	</section>

	<img src="./img/bg_recursos.svg" class="bg_desk" alt="">
	<img src="./img/bg_recursos_movil.png" class="bg_movil" alt="">
</main>

<footer>
	<?php require_once LAYOUT . "footer.php"; ?>
</footer>

<script src="./js/index.js" module></script>

</body>
</html>
