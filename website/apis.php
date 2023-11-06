<?php
include_once 'includes/general.php';
$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
var_dump($ip);
$jaj = IP::GetLocationFromIP(IP::GetIP());
var_dump($jaj);
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	include_once 'includes/head.php';
	?>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<div class=" d-flex flex-column flex-root">
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
							<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
								<h1 class="d-flex text-white align-items-center fw-bolder fs-3 my-1">Inicio</h1>
								<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
								<small class="text-white fs-md-6 fw-bold my-1 ms-1">Menu Principal</small>
							</div>
						</div>
					</div>

					<div class="post d-flex flex-column-fluid" id="kt_post">
						<div id="kt_content_container" class="container-fluid">
							<div class="notice d-flex bg-dark rounded border-secondary border mt-6 p-6">
								<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.8" x="2" y="2" width="20" height="20" rx="10" fill="#ffff99" />
										<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="#ff0000" />
										<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="#ff0000" />
									</svg>
								</span>
								<?php

								?>
							</div>
						</div>
					</div>
					<?php
					include_once 'includes/scripts.php';
					?>
</body>

</html>