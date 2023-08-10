<?php
class M_vehicule extends MY_Model {
    public $ID_vehicule;
    public $Code_type;
    public $Num_serie;
    public $Date_premier_mise_en_circ;
    public $Code_marque;
    public $Code_genre;
    public $Code_carosserie;
    public $Puissance;

    public $Energie;
    public $Places;
    public $PV;
    public $provenance;
    public $CU;
    public $PT;
    public $Mutations;
    public $Observations;

    public function  get_data_max_id(){

            return $this->db->select_max('ID_vehicule')
                ->select('Code_genre')
                ->select('Code_marque')
                ->select('Code_type')
                ->select('Num_serie')
                ->select('Code_carosserie')
                ->select('Puissance')
                ->select('Energie')
                ->select('Places')
                ->select('provenance')
                ->select('Date_premier_mise_en_circ')
                ->select('PV')
                ->select('CU')
                ->select('PT')
                ->select('Mutations')
                ->select('Observations')

                ->from($this->get_db_table())
                ->get()
                ->result();





    }


    public function get_db_table()
    {
        return 'véhicule';
    }

    public function get_db_table_pk()
    {
        return 'ID_vehicule';
    }

}
