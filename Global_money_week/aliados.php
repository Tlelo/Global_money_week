<?php 
	// define se define constantes para el acceso de archivo
	require_once "./app/define.php";
	require_once LAYOUT . "head.php";
	require_once LAYOUT . "header.php";
?>
<main>
		<section class="container">
			<section class="row">
				<p>Estos son los líderes de educación financiera que han hecho posible el Global Money Week México 2023:</p>

				<div>
					<img src="<?php echo IMG; ?>btn_proximamente.png" alt="">
				</div>		
				<!-- end welcome_descripcion -->
			</section>
		
		<img src="./img/bg_afiliados.svg" class="bg_desk" alt="">
		<!-- <img src="./img/bg_home_movil.png" class="bg_movil" alt=""> -->
	</section>
</main>

<footer>
	<?php require_once LAYOUT . "footer.php"; ?>
</footer>

<script src="./js/index.js" type="module"></script>

</body>
</html>
