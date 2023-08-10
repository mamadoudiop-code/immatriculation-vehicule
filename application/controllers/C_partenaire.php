<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_partenaire extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_type_partenaire', 'partenaire');
    }

    public function index()
    {

        $all_data = $this->partenaire->get_data();  //echo json_encode($all_data); exit;
        $data['all_data'] = $all_data; 
        $data['select_partenaire'] = create_select_list($all_data, 'code_type_part', 'libelle_type_part');
    


        $this->load->view('V_partenaire', $data);

        

    }

    public function save()
    {
      
        
         $this->partenaire->code_type_part               = $this->input->post('code_type_part');
        $this->partenaire->libelle_type_part             = $this->input->post('libelle_type_part');
        $this->partenaire->etat_partenaire                = $this->input->post('etat_partenaire');
        
        
        date_default_timezone_set('UTC');
        

        echo json_encode($this->partenaire->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

    }

    public function get_record()
    {
        $args = func_get_args();
        $this->partenaire->code_type_part = $args[0];
        $this->partenaire->get_record();
        echo json_encode($this->partenaire, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }


  public function delete()
    {
        $args = func_get_args();
        $this->partenaire->code_type_part = $args[0];
        echo json_encode($this->partenaire->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function archive()
    {
        $args = func_get_args();
        if ($this->partenaire->get_etat($args[0])[0] == 1)
        {
            $this->partenaire->code_type_part = $args[0];
            $result = $this->partenaire->fake_delete();
            $result['message'] = 'Archivage effectué';
        }

        else
        {
            $this->partenaire->code_type_part = $args[0];
            $result = $this->partenaire->restor();
        }
        echo json_encode($result, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

}
