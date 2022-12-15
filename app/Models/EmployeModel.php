<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeModel extends Model
{
  public function getEmploye()
	{
		$db      = \Config\Database::connect('default');
		$builder = $db->table('empleados');
		$builder->select('empleados.*, areas.name_area, perfiles.nombre');
    $builder->join('areas', 'areas.id = empleados.area');
    $builder->join('perfiles', 'perfiles.id = empleados.perfil');
		$builder->where('borrado', false);
		return $builder->get()->getResultArray();
	}

  public function getPerfiles()
	{
		$db      = \Config\Database::connect('default');
		$builder = $db->table('perfiles');
		$builder->select('*');
		return $builder->get()->getResultArray();
	}

  public function updateEmploye($data, $id)
  {
    $db      = \Config\Database::connect('default');
		$builder = $db->table('empleados');
		$builder->where('id', $id);
		$update = $builder->update($data);
		if ($update == 1) {
			return 1;
		} else {
			return 0;
		}
  }

  public function deleteEmpoye($data, $id)
	{
		$db      = \Config\Database::connect('default');
		$builder = $db->table('empleados');
		$builder->where('id', $id);
		$update = $builder->update($data);
		if ($update == 1) {
			return 1;
		} else {
			return 0;
		}
	}

  public function getAreas()
	{
		$db      = \Config\Database::connect('default');
		$builder = $db->table('areas');
		$builder->select('*');
		return $builder->get()->getResultArray();
	}
  public function setEmploye($data)
	{
    $db      	= \Config\Database::connect('default');
		$builder 	= $db->table('empleados');
		$insert 	= $builder->insert($data);
		if ($insert) {
			return 1;
		} else {
			return 0;
		}
	}
}