<?php

namespace App\Controllers;

use App\Models\EmployeModel;

class Home extends BaseController
{
	public function index()
	{
		return  view('templete/header') .
			view('empleados/index') .
			view('templete/footer');
	}

	public function getEmploye()
	{
		$employeModel  = new EmployeModel();
		$response = [
			'success'   => true,
			'msg'       => "Lista de empleados",
			'employes' 	=> $employeModel->getEmploye()
		];
		return $this->response->setJSON($response);
	}
	
	public function setEmploye()
	{
		$employeModel  = new EmployeModel();
		$data = [
			"full_name"				=> $this->request->getVar("fullNameEmploye"),
			"alias"   				=> $this->request->getVar("alieasEmploye"),
			"email"   				=> $this->request->getVar("emailEmploye"),
			"birthdate"       => $this->request->getVar("birtDateEmploye"),
			"address"      		=> $this->request->getVar("addressEmploye"),
			"phone"   				=> $this->request->getVar("phoneEmploye"),
			"date_admission"	=> $this->request->getVar("admissionDateEmploye"),
			"salary"   				=> $this->request->getVar("salaryEmploye"),
			"password"   			=> $this->request->getVar("passwordEmploye"),
			"area"   					=> $this->request->getVar("areaEmploye"),
			"perfil"   				=> $this->request->getVar("profileEmploye"),
		];
		$setResponse = $employeModel->setEmploye($data);
		if ($setResponse == 1) {
			$response = [
				'success'    => true,
				'msg'        => "El empleado se creo con exito"
			];
		} else {
			$response = [
				'success'   => false,
				'msg'       => "Problemas para crear al empleado"
			];
		}
		return $this->response->setJSON($response);
	}

	public function updateEmploye()
	{
		$employeModel  = new EmployeModel();
		$data = [
			"full_name"				=> $this->request->getVar("nameEdit"),
			"alias"   				=> $this->request->getVar("aliasEdit"),
			"email"   				=> $this->request->getVar("emailEdit"),
			"birthdate"       => $this->request->getVar("birtdateEdit"),
			"address"      		=> $this->request->getVar("addressEdit"),
			"phone"   				=> $this->request->getVar("phoneEdit"),
			"date_admission"	=> $this->request->getVar("dateAdmissionEdit"),
			"salary"   				=> $this->request->getVar("salaryEdit"),
			"password"   			=> $this->request->getVar("passwordEdit"),
			"area"   					=> $this->request->getVar("areaEdit"),
			"perfil"   				=> $this->request->getVar("perfilEdit"),
		];
		$updateResponse = $employeModel->updateEmploye($data, $this->request->getVar("id"));

		if ($updateResponse == 1) {
			$response = [
				'success'    => true,
				'msg'        => "Información actualizada"
			];
		} else {
			$response = [
				'success'   => false,
				'msg'       => "Problemas para actualizar la información"
			];
		}
		return $this->response->setJSON($response);
	}

	public function deleteEmploye()
	{
		$employeModel  = new EmployeModel();
		$data = [
			"borrado"	=> filter_var($this->request->getVar("borrado"), FILTER_VALIDATE_BOOLEAN),
		];

		$deleteResponse = $employeModel->deleteEmpoye($data, $this->request->getVar("id"));
		if ($deleteResponse == 1) {
			$response = [
				'success'    => true,
				'msg'        => "Información borrada"
			];
		} else {
			$response = [
				'success'   => false,
				'msg'       => "Problemas para borrar al empleado"
			];
		}
		return $this->response->setJSON($response);
	}

	public function getPerfiles()
	{
		$employeModel  = new EmployeModel();
		$response = [
			'success'   => true,
			'msg'       => "Lista de perfiles",
			'perfiles' 	=> $employeModel->getPerfiles()
		];
		return $this->response->setJSON($response);
	}
	public function getAreas()
	{
		$employeModel  = new EmployeModel();
		$response = [
			'success'   => true,
			'msg'       => "Lista de areas",
			'areas' 	=> $employeModel->getAreas()
		];
		return $this->response->setJSON($response);
	}
}
