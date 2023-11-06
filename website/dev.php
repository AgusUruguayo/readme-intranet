<?php
include_once 'includes/general.php';
$idUsuario = $_SESSION['id'];
$usuario = new User($idUsuario);
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	include_once 'includes/head.php';
	?>
</head>


<body id="kt_body" class="loader header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:45px;--kt-toolbar-height-tablet-and-mobile:55px">
	<div class="d-flex flex-column flex-root">
		<div class="page d-flex flex-row flex-column-fluid">
			<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<?php
				include "includes/lateral.php";
				?>
			</div>

			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<?php
				include "includes/header.php";
				?>
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<div class="toolbar" id="kt_toolbar">
						<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
							<ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-bold">
								<li class="breadcrumb-item pe-3"><a href="#" class="pe-3">Panel</a></li>
								<li class="breadcrumb-item px-3"><a href="index" class=" text-muted pe-3">Inicio</a></li>
							</ol>
						</div>
					</div>

					<div class="post d-flex flex-column-fluid" id="kt_post">
						<div id="kt_content_container" class="container-fluid">
							
							<button type="button" class="btn btn-primary" onclick="Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})
							">Hola mundo</button>
							<?php


							include_once 'includes/scripts.php';
							
							?>
</body>

</html>