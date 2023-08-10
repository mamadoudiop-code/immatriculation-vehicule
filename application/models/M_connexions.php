<?php
class M_connexions extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}	
	
	public function test_connexion()
	{
		$this->load->helper('url');
		$login = $this->input->post('username');
		$pass  = $this->input->post('password');
		$sql_ll = "SELECT
						usr.id AS page_bidar_, CONCAT(UPPER(usr.prenom), ' ',UPPER(usr.nom)) AS user_conn,
						usr.email, 
						usr.prenom, 
						usr.nom, 
						usr.prenom,
						s.id_type  _niv,
						usr.id_service	serv, 
						pr.libelle_type_profil AS profil, 
						pr.id_type_profil AS id_profil, 
						usr.ien 
					FROM 
						sys_niits usr 
					INNER JOIN sys_type_profil pr ON(pr.id_type_profil=usr.id_profil) 
					INNER JOIN sys_liste_services s ON(s.id=usr.id_service) 
					WHERE usr.email='".$login."' and usr.password='".$pass."' AND statut='actif'";

//var_dump($sql_ll);break; 

		$query = $this->db->query($sql_ll);
		return $query->row_array();
	}
}