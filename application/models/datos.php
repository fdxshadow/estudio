<?php 
/**
* 
*/
class datos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	function obtener(){
		$query=$this->db->get('peliculas');
		return $query->result();
	}

	function eliminar($id){
		$data=array(
			'id'=>$id
			);
		$this->db->delete('peliculas',$data);

	}

	function obtenerbyid($id){
		$data=array(
			'id'=>$id
			);

		$this->db->where($data);
		$query=$this->db->get('peliculas');
		return $query->result();




	}

	function editar($id,$nombre,$genero,$sucursal){

		$data=array(
			'Nombre'=>$nombre,
			'Genero'=>$genero,
			'Sucursal'=>$sucursal
			);
    $this->db->where('id', $id);
    return $this->db->update('peliculas',$data);
  }




	}


 ?>