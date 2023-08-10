<?php
class M_statut extends MY_Model {
    public $id_Statut;
    public $libelle_statut;

    public function get_db_table()
    {
        return 'statut';
    }

    public function get_db_table_pk()
    {
        return 'id_Statut';
    }

}
