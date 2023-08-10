<?php 
class M_bailleurs extends MY_Model
{

public $code_bailleurs;
public $code_type_part;
public $libelle_bailleurs;
public $etat_bailleurs;

	public function get_data()

	{

		return $this->db->select("bailleurs.*  ")
			->from($this->get_db_table() . ' AS bailleurs')
			//->join('type_partenaire As part', 'part.code_type_part = bailleurs.code_type_part')
			->get()
			->result();
	}



	public function get_db_table()
    {
		return 'bailleurs';
	}

    public function get_db_table_pk()
    {
        return 'code_bailleurs';
    }
    public function get_db_table_etat()
    {
        return 'etat_bailleurs';
    }

    public function get_vf_table()
    {
        return 'projet_financement';
    }

    public function get_vf_table_pk()
    {
        return 'code_bailleurs';
    }


}