<?php 
class M_etablissement extends MY_Model {
	public $id_etablissement;
	public $libelle_etablissement;
	public $cycle_etablissement;
	public $etat;
	
	public function get_db_table()
	{
		return 'etablissements';
	}

	public function get_db_table_pk()
	{
		return 'id_etablissement';
	}

}
