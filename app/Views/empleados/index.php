<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Empleados</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">Home</a></li>
						<li class="breadcrumb-item active">Empleados</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="card">
			<div class="card-body">
				<div id="ADMIN">
					<div class="row jf-c mb-2">
						<div class="card-tools ">
							<button onclick="setSelects()" class="btn btn-primary" data-toggle="modal" data-target="#modalFormEmployes">
								<i class="fas fa-solid fa-plus"></i>
							</button>
						</div>
					</div>
					<table aria-describedby="Tabla de lista de los empleados" id="listEmployes" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th scope>Id</th>
								<th scope>Nombre</th>
								<th scope>Alias</th>
								<th scope>Correo</th>
								<th scope>Fecha nacimiento</th>
								<th scope>Dirección</th>
								<th scope>Telefono</th>
								<th scope>Fecha ingreso</th>
								<th scope>Sueldo neto</th>
								<th scope>Contraseña</th>
								<th scope>Area</th>
								<th scope>Perfil</th>
								<th scope>Fecha alta</th>
								<th scope>Acción</th>
							</tr>
						</thead>
						<tbody id="tbListEmployes"></tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Modal para nuevo empleado -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="modalFormEmployes">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Nuevo empleado</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="formDataEmploye">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Nombre:</label>
								<input id="fullNameEmploye" name="fullNameEmploye" type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Alias:</label>
								<input id="alieasEmploye" name="alieasEmploye" type="text" class="form-control"></input>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Correo:</label>
								<input id="emailEmploye" name="emailEmploye" type="email" class="form-control"></input>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Fecha nacimiento:</label>
								<input id="birtDateEmploye" name="birtDateEmploye" type="date" class="form-control"></input>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Dirección:</label>
								<input id="addressEmploye" name="addressEmploye" type="text" class="form-control"></input>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Telefono:</label>
								<input id="phoneEmploye" name="phoneEmploye" type="text" class="form-control"></input>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label>Fecha ingreso:</label>
								<input id="admissionDateEmploye" name="admissionDateEmploye" type="date" class="form-control"></input>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>Sueldo neto:</label>
								<input id="salaryEmploye" name="salaryEmploye" type="text" class="form-control"></input>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>Contraseña:</label>
								<input id="passwordEmploye" name="passwordEmploye" type="text" class="form-control"></input>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<label for="areaEmploye">Area:</label>
							<select class="form-control" name="areaEmploye" id="areaEmploye"></select>
						</div>
						<div class="col-lg-6">
							<label for="profileEmploye">Perfil:</label>
							<select class="form-control" name="profileEmploye" id="profileEmploye"></select>
						</div>
					</div>
			</div>
			<div class="modal-footer justify-content-center">
				<button onclick="registerFormEmploye()" type="button" class="btn btn-primary">
					<span class="fas fa-check"></span>
				</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">
					<i class="fas fa-window-close"></i>
				</button>
			</div>
		</div>
	</div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?= base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>/public/dist/js/customJs/empleado.js"></script>