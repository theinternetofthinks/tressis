<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<header class="header">
			<div class="nav secondary">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="menu-wrapper">
								<div class="languaje-switcher">
									ES EN
								</div>
								<nav>
									<ul>
										<li>Te llamamos</li>
										<li>Ayuda</li>
										<li>Iniciar sesión</li>
										<li>Hazte cliente</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="nav primary">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-tressis.svg" alt="logotipo tressis"/>
							</a>
							<div class="mega-nav">
								<?php wp_megamenu(array('theme_location' => 'primary')); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>

		