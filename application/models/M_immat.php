<?php
class M_immat extends MY_Model {
    public $id_mat;
   // public $id_dem;
    public $id_v;
    public $matricule;
    public $id_rep;
    public $Num_série;
    public $id_statut;
    public $date;







    public function get_db_table()
    {
        return 'immatriculer';
    }

    public function get_db_table_pk()
    {
        return 'id_mat';
    }

}
