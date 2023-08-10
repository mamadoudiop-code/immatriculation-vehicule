<?php 
class M_type_partenaire extends MY_Model {
	public $code_type_part;
	public $libelle_type_part;
	public $etat_partenaire;

/*public function get_data()

	{

		return $this->db->select("type_partenaire.*")
			->from($this->get_db_table() . ' AS type_partenaire')
			//->join('type_partenaire As part', 'part.code_type_part = bailleurs.code_type_part')
			->get()
			->result();
	}*/


	
	public function get_db_table()
	{
		return 'type_partenaire';
	}

	public function get_db_table_pk()
	{
		return 'code_type_part';
	}

}
