<?php

include_once 'includes/general.php';
$sesionId = $_SESSION['id'];
$permisos = User::GetRankFromUser($sesionId);
$logsData = AuditLogs::ShowUserLogs($_GET['id']);
$userLogs = AuditLogs::GetLogsFromUser($_SESSION['id']);

if (isset($_GET['id'])) {
	$idUsuario = $_GET['id'];
	$userData = User::GetUserById($idUsuario);
	if (count($userData) == 0) {
		die("[Agras]: Usuario no encontrado. 1");
	}
} else {
	die('[Agras]: Usuario no encontrado. 2');
}

foreach ($userData as $Usuario => $value) {
}

if ($_POST) {
	$idUsuario = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	include_once 'includes/head.php';
	?>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:1px;--kt-toolbar-height-tablet-and-mobile:55px">
	<div class=" d-flex flex-column flex-root">
		<div class="page d-flex flex-row flex-column-fluid">
			<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<?php include "includes/lateral.php"; ?>
			</div>
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_content">
				<?php include "includes/header.php"; ?>
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<div class="post d-flex flex-column-fluid" id="kt_post">
						<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
							<div class="content flex-row-fluid" id="kt_content">
								<?php
								if (isset($_GET['emailRepeat'])) {
									echo '<div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row w-100 p-5 mt-10 mb-5">
														<span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">
														<i style="font-size: 30px;" class="mt-2 text-white fa-solid fa-triangle-exclamation"></i>
														</span>
														<div class="d-flex flex-column text-light pe-0 pe-sm-10">
															<h4 class="mb-2 text-white"> Error al actualizar tu perfil! </h4>
															<span class="text-white">El email se encuentra en uso por otra persona. Intenta con otro.</span>
														</div>
														<button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
															<span class="svg-icon svg-icon-2x svg-icon-light">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
																</svg>
															</span>
														</button>
													</div>';
								} else if (isset($_GET['success'])) {
									echo '<div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row w-100 p-5 mt-10 mb-5">
														<span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">
														<i style="font-size: 30px;" class="mt-2 text-white fa-solid fa-check-circle"></i>
														</span>
														<div class="d-flex flex-column text-light pe-0 pe-sm-10">
															<h4 class="mb-2 text-white"> Perfil actualizado! </h4>
															<span class="text-white">Tu perfil ha sido actualizado correctamente.</span>
														</div>
														<button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
															<span class="svg-icon svg-icon-2x svg-icon-light">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
																</svg>
															</span>
														</button>
													</div>';
								}
								?>
								<div class="card mb-5 mb-xl-10">
									<div class="card-body pt-9 pb-0">
										<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
													<img <?php
															echo 'src="' . $value["profile_pic"] . '"';
															?> />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>

											<div class="flex-grow-1">
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<div class="d-flex flex-column">
														<div class="d-flex align-items-center mb-2">
																<?php
																if ($_SESSION['username'] == 'visitante') {
																	echo "";
																} else {
																	echo '
																		<a href="#" class="ms-xxl-2 me-5 fs-sm-8 btn btn-sm btn-secondary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">✏️</a>
																			<form action="changePhoto.php" method="post" enctype="multipart/form-data">
																				<input type="file" name="fileToUpload" id="fileToUpload" id="fileToUpload" style="display:none;" />
																				<label class="btn btn-sm btn-secondary" name="fileToUpload" id="fileToUpload" for="fileToUpload">📸</label>
																				<input type="submit" class="ms-3 btn btn-sm btn-light-success" value="Cargar" name="subir">
																			</form>';
																}
																?>
														</div>
														<?php echo '
														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<div class="me-10 d-flex items-center py-0">
																<div class="d-flex flex-column flex-grow-1 pr-8">
																	<div class="d-flex flex-wrap mb-1 mt-5">
																		<a class="text-muted">
																			<code><i class="text-white fa-solid fa-user"></i></code>
																			<code class="ms-sm-2">' . $value['nombre'] . ' ' . $value['apellido'] . ' (#' . $value['id'] . ')</code>
																		</a>
																	</div>
																	<div class="d-flex flex-wrap mb-1">
																		<a class="text-muted">
																			<code><i class="text-white fa-solid fa-envelope"></i></code>
																			<code>' . $value['correo'] . ' </code>
																		</a>
																	</div>
																	<div class="d-flex flex-wrap mb-1">
																		<a class="text-muted">
																			<code><i class="text-white fa-brands fa-bitcoin"></i></code>
																			<code>' . $value['creditos'] . ' </code>
																		</a>
																	</div>
																	<div class="d-flex flex-wrap mb-1">
																		<a class="text-muted">
																			<code><i class="text-white fa-solid fa-phone"></i></code>
																			<code>' . $value['celular'] . ' </code>
																		</a>
																	</div>
																</div>
															</div>
														</div>';
														?>
													</div>
												</div>

												<div class="m-0">
													<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
														<div class="modal-dialog mw-650px">
															<div class="modal-content">
																<div class="modal-header" id="kt_modal_add_user_header">
																	<h2 class="fw-bolder text-white">Editar mi cuenta</h2>
																	<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
																		<span class="svg-icon svg-icon-1">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																				<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																			</svg>
																		</span>
																	</div>
																</div>

																<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
																	<form action="editProfileDetails.php" id="kt_modal_invite_friends" method="post" enctype="multipart/form-data">
																		<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
																			<div class="fv-row mb-7">
																				<label class="text-white  fw-bold fs-6 mb-2"> Nombre</label>
																				<input type="text" name="nombreUser" id="nombreUser" class="form-control form-control-solid mb-3 mb-lg-0" <?php echo 'placeholder="' . $value['nombre'] . '"'; ?>>
																			</div>
																			<div class="fv-row mb-7">
																				<label class="text-white  fw-bold fs-6 mb-2"> Apellido</label>
																				<input type="text" name="apeUser" id="apeUser" class="form-control form-control-solid mb-3 mb-lg-0" <?php echo 'placeholder="' . $value['apellido'] . '"'; ?>>
																			</div>
																			<div class="fv-row mb-7">
																				<label class="text-white  fw-bold fs-6 mb-2"> Correo electronico</label>
																				<input type="text" name="correoEle" id="correoEle" class="form-control form-control-solid mb-3 mb-lg-0" <?php echo 'placeholder="' . $value['correo'] . '"'; ?>>
																			</div>
																			<div class="fv-row mb-7">
																				<label class="text-white  fw-bold fs-6 mb-2"> Celular</label>
																				<input type="text" name="celular" id="celular" class="form-control form-control-solid mb-3 mb-lg-0" <?php echo 'placeholder="' . $value['celular'] . '"'; ?>>
																			</div>
																			<div class="fv-row mb-7">
																				<input type="hidden" name="idUsuario" id="idUsuario" class="form-control form-control-solid mb-3 mb-lg-0" <?php echo 'value="' . $value['id'] . '"'; ?> readonly>
																			</div>
																		</div>
																		<div class="text-center pt-15">
																			<input type="submit" name="submit" class="btn btn-sm btn-success" value="Guardar">
																			<input type="reset" data-bs-dismiss="modal" class="btn btn-sm btn-danger" value="Cancelar">
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<?php
								// Si el usuario es visitante, no mostrar la tabla
								if ($_SESSION['username'] != 'visitante') {
									echo '
										<div class="card mb-5 mb-lg-10">
											<div class="card-header">
												<div class="card-title">
													<h3 class="text-white"> <i class="fs-2 me-sm-3 bi bi-clipboard-data"></i>Registro de auditoría</h3>
												</div>
											</div>

										<div class="card-body p-0">
											<div class="table-responsive">
												<table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9" id="kt_permissions_table">
													<thead class="border-gray-200 fs-5 fw-bold">
														<tr>
															<th class="min-w-275px"> Localidad </th>
															<th class="min-w-200px"> Dirección IP </th>
															<th class="min-w-100px"> Descripcion </th>
															<th class="min-w-250px"> Fecha </th>
														</tr>
													</thead>';

									if (($logsData == true)) {
										foreach ($userLogs as $query => $value) {
											echo '
													<tr>
														<td>
															<span class="badge badge-light-dark"><i class="text-dark fa fa-map-marker"> </i> </span> <a class="ms-2 fw-bolder mb-1 fs-6"> ' . $value['localidad'] . ' 
														</td>
														<td>
															<span class="badge badge-light-dark"><i class="text-dark fa-solid fa-wifi"> </i> </span> <a class="ms-2 fw-bolder mb-1 fs-6"> ' . $value['ip'] . ' 
														</td>
														<td>
															<a class="text-primary-600 fw-bolder mb-1">' .  $value['type'] . ' <span class="mb-2 text-hover-primary fs-6">' .  $value['info'] . ' </span>  </a>
														</td>
														<td>
															<span class="badge badge-light-dark"><i class="text-white bi bi-calendar"> </i> </span> <a class="ms-2 fw-bolder text-hover-primary mb-1 fs-6"> ' . $value['date'] . ' 
														</td>
													</tr>';
										}
									} else {
										echo '
												<td>
													<div class="btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3"> -/- </div>
												</td>
												<td>
													<div class="btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3"> -/- </div>
												</td>
												<td>
													<div class="btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3"> -/- </div>
												</td>
												<td>
													<div class="btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3"> -/- </div>
												</td>
												<td>
													<div class="btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3"> -/- </div>
												</td>';
									}
								}
								?>
								</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	include_once 'includes/scripts.php';
	?>
</body>

</html>