<?php
class M_rep extends MY_Model {
    public $id_rep;
    public $code_mission;
    public $mission;
    public $mail;
    public $Adresse;
    public $Tel;
    public $id_type;

    public function get_data()

    {

        return $this->db->select("représentation.*,type.libelle_type")
            ->from($this->get_db_table() . ' AS représentation')
            ->join('type_rep As type', 'type.id_type = représentation.id_type')
            ->get()
            ->result();
    }
    public function all()

    {

        return $this->db->select("*")
            ->from($this->get_db_table())
            ->get()
            ->result();
    }

    public function get_db_table()
    {
        return 'représentation';
    }

    public function get_db_table_pk()
    {
        return 'id_rep';
    }

}
