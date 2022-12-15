$(document).ready(function () {
	getEmploye();
});
let Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4500
});

function getEmploye() {
	$.ajax({
		url: `${url}/get-employe`,
		type: "GET",
		success: function (response) {
			let tbody = "";
			$.each(response.employes, function (_, getEmploye) {
				tbody += `
            <tr>
              <td>${getEmploye.id}</td>
              <td>${getEmploye.full_name}</td>
              <td>${getEmploye.alias}</td>
              <td>${getEmploye.email}</td>
              <td>${getEmploye.birthdate}</td>
              <td>${getEmploye.address}</td>
              <td>${getEmploye.phone}</td>
              <td>${getEmploye.date_admission}</td>
              <td>${getEmploye.salary}</td>
              <td>${getEmploye.password}</td>
              <td>${getEmploye.name_area}</td>
              <td>${getEmploye.nombre}</td>
              <td>${getEmploye.date_register}</td>
							<td>
								<button title="Editar Empleado" onclick='editEmploye(${JSON.stringify(getEmploye)})' class="btn">
									<i class="fa fa-edit"></i>
								</button>
								<button title="Eliminar Empleado" onclick='deleteEmploye(${getEmploye.id},"${getEmploye.full_name}")' class="btn">
									<i class="fa fa-trash"></i>
								</button>
							</td>
            </tr>
        `;
			});
			if ($.fn.DataTable.isDataTable('#listEmployes')) {
				$('#listEmployes').DataTable().destroy();
			}
			$('#tbListEmployes').html(tbody);
		}
	}).done(function () {
		$('#listEmployes').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
			},
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
			"scrollX": true,
		});
	});
}

function registerFormEmploye() {
	let formEmploye = document.getElementById("formDataEmploye");
  let formData = new FormData(formEmploye);
	$.ajax({
		url: `${url}/set-employe`,
		type: "POST",
		cache: false,
		data: formData,
		processData: false,
		contentType: false,
		dataType: "JSON",
		success: function (response) {
			if (response.success === true) {
				getEmploye();
				formEmploye.reset()
				$('#modalFormEmployes').modal('hide');
				Toast.fire({
					icon: 'success',
					title: `${response.msg}`
				});
			} else {
				Toast.fire({
					icon: 'error',
					title: `${response.msg}`
				});
			}
		}
	});
}

function editEmploye(getEmploye) {
  setSelects();
	Swal.fire({
		title: 'Editar el empleado',
		html: `
		<row>
			<div class="col-md-12">
				<div class="card card-primary card-outline">
					<div class="card-body box-profile">
							<form id="formDataEditEmploye"> 
								<ul class="list-group list-group-unbordered mb-3">
									<li class="list-group-item">
										<label class="float-left">Nombre:</label> 
										<input type="text" value="${getEmploye.full_name}" id="nameEdit" name="nameEdit" class="float-right form-control">
									</li>
									<li class="list-group-item">
										<label class="float-left">Alias:</label> 
										<input type="text" value="${getEmploye.alias}" id="aliasEdit" name="aliasEdit" class="float-right form-control">
									</li>
									<li class="list-group-item">
										<label class="float-left">Correo:</label>
										<input type="text" value="${getEmploye.email}" id="emailEdit" name="emailEdit" class="float-right form-control">
									</li>
									<li class="list-group-item">
										<label class="float-left">Fecha nacimiento:</label>
										<input type="text" value="${getEmploye.birthdate}" id="birtdateEdit" name="birtdateEdit" class="float-right form-control">
									</li>
									<li class="list-group-item">
										<label class="float-left">Direccion:</label> 
										<input type="phone" value="${getEmploye.address}" id="addressEdit" name="addressEdit" class="float-right form-control">
									</li>
									<li class="list-group-item">
										<label class="float-left">Telefono:</label> 
										<input type="phone" value="${getEmploye.phone}" id="phoneEdit" name="phoneEdit" class="float-right form-control">
									</li>
									<li class="list-group-item">
										<label class="float-left">Fecha ingreso:</label> 
										<input type="date" value="${getEmploye.date_admission}" id="dateAdmissionEdit" name="dateAdmissionEdit" class="float-right form-control">
									</li>
									<li class="list-group-item">
										<label class="float-left">Sueldo neto:</label> 
										<input type="number" value="${getEmploye.salary}" id="salaryEdit" name="salaryEdit" class="float-right form-control">
									</li>
									<li class="list-group-item">
										<label class="float-left">Contraseña:</label> 
										<input type="text" value="${getEmploye.password}" id="passwordEdit" name="passwordEdit" class="float-right form-control">
									</li>
									<li class="list-group-item">
										<label class="float-left">Area:</label> 
										<select class="form-control" name="areaEdit" id="areaEdit">
										
										</select>
									</li>
									<li class="list-group-item">
										<label class="float-left">Perfil:</label> 
										<select class="form-control" name="perfilEdit" id="perfilEdit">
										</select>
									</li>
								</ul>
								<a onclick="editFormEmploye(${getEmploye.id})" class="btn btn-primary btn-block"><i class="fas fa-check"></i></a>
							</form>
						</div>
				</div>
			</div>
		</row>
		`,
		showDenyButton: false,
		showConfirmButton: false,
		howCloseButton: true,
		denyButtonColor: '#6c757d',
		confirmButtonColor: '#007bff'
	})
  
	$("#areaEdit").val(`${getEmploye.area}`).change();
	$("#perfilEdit").val(`${getEmploye.perfil}`).change();
}

function editFormEmploye(idEmploye) {
	let formEmployeEdit = document.getElementById("formDataEditEmploye");
  let formData = new FormData(formEmployeEdit);
			formData.append("id", idEmploye);
	$.ajax({
		url: `${url}/update-employe`,
		type: "POST",
		cache: false,
		data: formData,
		processData: false,
		contentType: false,
		dataType: "JSON",
		success: function (response) {
			if (response.success === true) {
				getEmploye();
				formEmployeEdit.reset();
				Toast.fire({
					icon: 'success',
					title: `${response.msg}`
				});
			} else {
				Toast.fire({
					icon: 'error',
					title: `${response.msg}`
				});
			}
		}
	});
}

function deleteEmploye(idEmploye, nameEmploye) {
	var formData = new FormData();
	formData.append("id", idEmploye);
	formData.append("borrado", true);

	Swal.fire({
		title: '¿Seguro de borrar al empleado?',
		showDenyButton: true,
		showCancelButton: false,
		confirmButtonText: '<i class="fas fa-check"></i>',
		denyButtonText: `<i class="fas fa-window-close"></i>`,
		denyButtonColor: '#6c757d',
		confirmButtonColor: '#007bff'
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: `${url}/delete-employe`,
				type: "POST",
				cache: false,
				data: formData,
				processData: false,
				contentType: false,
				dataType: "JSON",
				success: function (response) {
					if (response.success === true) {
						getEmploye();
						Toast.fire({
							icon: 'success',
							title: `${response.msg}`
						});
					} else {
						Toast.fire({
							icon: 'error',
							title: `${response.msg}`
						});
					}
				}
			});
		} else if (result.isDenied) {
			Toast.fire({
				icon: 'info',
				title: `El empleado ${nameEmploye} no se borro`
			});
		}
	})
}

function setSelects(){
  $.ajax({
    url: `${url}/get-perfiles`,
    type: "GET",
    success: function (response) {
      let option = `<option value="0">Selecciona...</option>`;
      $.each(response.perfiles, function (_, getProfile) {
        option += `<option value="${getProfile.id}">${getProfile.nombre}</option>`;
      });
      $("#profileEmploye").html(option);
      $("#perfilEdit").html(option);
    }
  });
  $.ajax({
    url: `${url}/get-areas`,
    type: "GET",
    success: function (response) {
      let option = `<option value="0">Selecciona...</option>`;
      $.each(response.areas, function (_, getArea) {
        option += `<option value="${getArea.id}">${getArea.name_area}</option>`;
      });
      $("#areaEmploye").html(option);
      $("#areaEdit").html(option);
    }
  });
}


