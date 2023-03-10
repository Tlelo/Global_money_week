<?php
	require_once "./app/define.php";
	require_once "./app/paramts.php";
?>
<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php $meta_theme_color = $_config[0]->meta_theme_color; ?>
	
	<?php if( $meta_theme_color->active ): ?>
		<meta name="<?php echo $meta_theme_color->name; ?>" content="<?php echo $meta_theme_color->color; ?>">
	<?php endif; ?>

	<?php if( $meta_description ): ?>
		<meta name="description" content="<?php echo $meta_description; ?>">
	<?php else: ?>
		<meta name="description" content="<?php echo $_config[0]->meta_description; ?>">
	<?php endif; ?>

	<?php if( $keyboards ): ?>
		<meta name="keywords" content="<?php echo $keyboards; ?>">
	<?php elseif( $_config[0]->meta_key_words ): ?>
		<meta name="keywords" content="<?php echo $_config[0]->meta_key_words; ?>">
	<?php endif; ?>

	<?php $meta_ios = $_config[0]->meta_ios; ?>
	<?php if( $meta_ios->active ): ?>
		<meta rel="<?php echo $meta_ios->rel; ?>" adaptable="<?php echo $meta_ios->adaptable; ?>">
	<?php endif; ?>
	

	<?php $meta_bar = $_config[0]->meta_bar; ?>
	<?php if( $meta_bar->active ): ?>
		<meta rel="<?php echo $meta_bar->rel; ?>" color_bar="<?php echo $meta_bar->color_bar; ?>">
	<?php endif; ?>
	
	

	<?php if( $page_title ): ?>
		<title><?php echo $_config[0]->site_name ." | ".$page_title; ?></title>
	<?php else: ?>
		<title><?php echo $_config[0]->site_name; ?></title>
	<?php endif; ?>
	
	
	<link rel="stylesheet" href="<?php echo CSS . $link_css; ?>">
	
	<!--Favicons-->
	<?php foreach( $_config[0]->favicons as $favicon ): ?>
		<?php if( $favicon->active ): ?>
			<link rel="<?php echo $favicon->rel; ?>" type="<?php echo $favicon->type; ?>"
			href="<?php echo $favicon->href;?>" size="<?php echo $favicon->size; ?>" />
		<?php endif; ?>
	<?php endforeach; ?>
	
</head>
<body <?php if( $class_page ) echo " class='".$class_page."'"; ?>>

</head>
<body>
