<?php
class M_demandeur extends MY_Model {
    public $id_Demandeur;
    public $Prenom;
    public $Nom;
    public $profession;
    public $id_rep;
    public $Num_série;
    public $id_statut;






    public function get_db_table()
    {
        return 'demandeur';
    }

    public function get_db_table_pk()
    {
        return 'id_Demandeur';
    }

}
