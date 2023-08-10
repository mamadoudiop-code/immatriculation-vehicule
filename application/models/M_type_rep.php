<?php
class M_type_rep extends MY_Model {

    public $id_type;
    public $libelle_type;

    public function get_db_table()
    {
        return 'type_rep';
    }

    public function get_db_table_pk()
    {
        return 'id_type';
    }

}
