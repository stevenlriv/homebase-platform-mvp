<?php
    if ( !defined('THEME_LOAD') ) { die ( header('Location: /not-found') ); }
?>

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Cambiar Contraseña</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Inicio</a></li>
						<li>Cambiar Contraseña</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">


		<?php sidebar_component(); ?>

		<div class="col-md-8">

			<div class="row hidden-md hidden-lg">
				<div class="col-md-6 margin-bottom-30">
					<div class="notification notice">
						<p>Su contraseña debe tener al menos 12 caracteres de longitud</p>
					</div>
				</div>
			</div>

			<div class="row" style="margin-top: -30px;">
				<div class="col-md-6 my-profile">
					<form method="post" name="change-password">

						<?php
							show_message($form_success, $form_error, $form_info);
						?>

						<label>Contraseña Actual</label>
						<input type="password" name="old">

						<label>Nueva Contraseña</label>
						<input type="password" name="password">

						<label>Confirmar Nueva Contraseña</label>
						<input type="password" id="confirm" name="confirm">

						<button type="submit" name="submit" class="button border margin-top-10">Guardar Cambios</button>
					</form>
				</div>

				<?php
					if(empty($form_success) && empty($form_error)) {
				?>
				<div class="hidden-xs hidden-sm">
					<div class="col-md-6">
						<div class="notification notice">
							<p>Su contraseña debe tener al menos 12 caracteres de longitud</p>
						</div>
					</div>
				</div>
				<?php
					}
				?>

			</div>
		</div>

	</div>
</div>