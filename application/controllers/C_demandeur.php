<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_demandeur extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_statut', 'statut');
        $this->load->model('M_type_rep', 'type_rep');
        $this->load->model('M_rep', 'rep');
        $this->load->model('M_vehicule', 've');
        $this->load->model('M_demandeur', 'dem');
        $this->load->model('M_immat', 'mat');
    }

    public function index()
    {
        $all_data = $this->dem->get_data();  //echo json_encode($all_data); exit;
        $data['all_data'] = $all_data;
        $type_rep = $this->type_rep->get_data();
        $data['select_type'] = create_select_list($type_rep, 'id_type', 'libelle_type');
        $statut = $this->statut->get_data();
        $data['select_statut'] = create_select_list($statut, 'id_Statut', 'libelle_statut');


        $this->load->view('V_demandeur', $data);
    }

    public function get_record()
    {
        $args = func_get_args();
        $this->dem->id_Demandeur = $args[0];
        $this->dem->get_record();
        echo json_encode($this->dem, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function delete()
    {
        $args = func_get_args();
        $this->dem->id_Demandeur = $args[0];
        echo json_encode($this->dem->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function save()
    {

        if (!empty($this->input->post('id_Demandeur')) && !empty($this->input->post('id_mat'))) {
            $this->dem->id_Demandeur = $this->input->post('id_Demandeur');
            $this->mat->id_mat = $this->input->post('id_mat');
        }

        //   $this->etab->date_saisie 					= date("Y-m-d H:i:s");
        //}
        if ($this->input->post('id_rep') == '1' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/1.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '1 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/1.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '2' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/001(1).json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '001(1) - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/001(1).json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '3' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/001(2).json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '001(2) - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/001(2).json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '4' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/2.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '2 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/2.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '5' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/002(1).json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '002(1) - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/002(1).json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '6' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/3.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '3 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/3.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '7' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/4.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '4 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/4.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '8' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/6.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '6 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/6.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '9' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/7.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '7 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/7.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '10' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/8.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '8 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/8.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '11' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/10.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '10 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/10.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '12' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/11.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '11 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/11.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '13' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/12.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '12 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/12.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '14' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/14.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '14 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/14.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '15' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/15.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '15 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/15.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '16' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/16.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '16 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/16.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '17' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/17.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '17 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/17.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '18' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/19.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '19 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/19.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '19' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/20.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '20 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/20.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '20' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/21.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '21 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/21.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '21' && $this->input->post('id_statut') == '1') {
        // chemin d'accès à votre fichier JSON
        $file = 'matricule/CMD/22.json';
// mettre le contenu du fichier dans une variable
        $data = file_get_contents($file);
// décoder le flux JSON
        $obj = json_decode($data);
// accéder à l'élément approprié
        $this->mat->matricule = '22 - CMD - '.$obj[0]->numero;
        //echo
        $obj[0]->numero = $obj[0]->numero + 1;
        $newJsonString = json_encode($obj);
        file_put_contents('matricule/CMD/22.json', $newJsonString);


    }
        if ($this->input->post('id_rep') == '22' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/23.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '23 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/23.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '23' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/24.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '24 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/24.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '24' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/25.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '25 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/25.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '25' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/025(1).json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '025(1) - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/025(1).json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '26' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/26.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '26 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/26.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '27' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/27.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '27 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/27.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '28' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/28.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '28 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/28.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '29' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/29.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '29 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/29.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '30' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/30.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '30 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/30.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '31' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/31.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '31 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/31.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '32' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/32.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '32 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/32.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '33' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/33.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '33 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/33.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '34' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/34.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '34 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/34.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '35' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/36.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '36 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/36.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '36' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/37.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '37 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/37.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '37' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/38.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '38 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/38.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '38' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/40.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '40 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/40.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '39' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/42.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '42 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/42.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '40' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/43.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '43 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/43.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '41' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/46.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '46 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/46.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '42' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/47.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '47 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/47.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '43' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/5.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '5 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/5.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '44' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/52.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '52 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/52.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '45' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/54.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '54 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/54.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '46' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/55.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '55 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/55.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '47' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/58.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '58 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/58.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '48' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/59.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '59 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/59.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '49' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/60.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '60 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/60.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '50' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/63.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '63 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/63.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '51' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/64.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '64 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/64.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '52' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/67.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '67 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/67.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '53' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/68.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '68 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/68.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '54' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/70.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '70 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/70.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '55' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/72.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '72 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/72.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '56' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/77.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '77 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/77.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '57' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/78.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '78 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/78.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '58' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/79.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '79 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/79.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '59' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/80.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '80 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/80.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '60' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/81.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '81 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/81.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '61' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/97.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '97 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/97.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '62' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/98.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '98 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/98.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '63' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/99.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '99 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/99.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '64' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/1 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '1 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/1 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '65' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/10 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '10 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/10 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '66' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/10 NU(1).json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '10 NU(1) - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/10 NU(1).json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '67' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/100.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '100 - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/100.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '68' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/11 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '11 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/11 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '69' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/12 (2).json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '12(2) - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/12 (2).json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '70' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/12 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '12 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/12 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '71' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/13 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '13 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/13 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '72' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/14 (2).json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '14(2) - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/14 (2).json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '73' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/14 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '14NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/14 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '74' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/15 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '15 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/15 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '75' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/16 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '16 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/16 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '76' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/17 (2).json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '17 (2) - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/17 (2).json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '77' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/17 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '17 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/17 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '78' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/18 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '18 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/18 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '79' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/2 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '2 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/2 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '80' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/3 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '3 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/3 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '81' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/4 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '4 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/4 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '82' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/5 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '5 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/5 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '83' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/6 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '6 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/6 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '84' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/7 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '7 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/7 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '85' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/7o.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '7o - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/7o.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '86' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/7u.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '7u - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/7u.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '87' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/8 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '8 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/8 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '88' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/9 NU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = '9 NU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/9 NU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '89' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/ASNA.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'ASNA - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/ASNA.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '90' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/AUF.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'AUF - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/AUF.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '91' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/BC.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'BC - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/BC.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '92' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/BM.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'BM - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/BM.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '93' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/BOAD.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'BOAD - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/BOAD.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '94' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/CDA.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'CDA - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/CDA.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '95' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/CFJ.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'CFJ - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/CFJ.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '96' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/CICR.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'CICR - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/CICR.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '97' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/CINU.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'CINU - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/CINU.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '98' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/CRDI.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'CRDI - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/CRDI.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '99' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/EIV.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'EIV - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/EIV.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '100' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/EMT.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'EMT - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/EMT.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '101' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/ER.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'ER - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/ER.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '102' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/FICR.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'FICR - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/FICR.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '103' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/GAB.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'GAB - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/GAB.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '104' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/IAR.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'IAR - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/IAR.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '105' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/IFC.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'IFC - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/IFC.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '106' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/OIF.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'OIF - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/OIF.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '107' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/OIM.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'OIM - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/OIM.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '108' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/TA.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'TA - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/TA.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '109' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/WAM.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'WAM - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/WAM.json', $newJsonString);


        }
        if ($this->input->post('id_rep') == '110' && $this->input->post('id_statut') == '1') {
            // chemin d'accès à votre fichier JSON
            $file = 'matricule/CMD/WV.json';
// mettre le contenu du fichier dans une variable
            $data = file_get_contents($file);
// décoder le flux JSON
            $obj = json_decode($data);
// accéder à l'élément approprié
            $this->mat->matricule = 'WV - CMD - '.$obj[0]->numero;
            //echo
            $obj[0]->numero = $obj[0]->numero + 1;
            $newJsonString = json_encode($obj);
            file_put_contents('matricule/CMD/WV.json', $newJsonString);


        }


        $this->dem->Prenom = $this->input->post('Prenom');
        $this->dem->Nom = $this->input->post('Nom');
        $this->dem->profession = $this->input->post('profession');
        $this->dem->id_rep = $this->input->post('id_rep');
        $this->dem->Num_série = $this->input->post('Num_série');
        $this->dem->id_statut = $this->input->post('id_statut');

        $this->mat->id_v = $this->input->post('ID_vehicule');

        $this->mat->Num_série = $this->input->post('Num_série');
        $this->mat->id_statut = $this->input->post('id_statut');
        $this->mat->id_rep = $this->input->post('id_rep');


        //$this->etab->cycle_etablissement				= $this->input->post('cycle_etablissement');

        //$this->etab->etat								= $this->input->post('etat_etablissement');

        //date_default_timezone_set('UTC');
        //$this->etab->date_last_modif 					= date("Y-m-d H:i:s");

        echo json_encode($this->dem->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
        echo json_encode($this->mat->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br>
          <link href="<?php echo base_url(); ?>assets_2/animation.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets_2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets_2/css/core.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets_2/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets_2/css/components.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets_2/css/pages.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets_2/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets_2/css/responsive.css" rel="stylesheet" type="text/css">
        <div class="row" style="margin-left: 36%;">
            <h1  class="animated bounceOutDown delay-3s">  
            En cours d'immatriculation
            </h1 >
            <h1  class="animated bounceINdown delay-1s slow-1s">  
            Nouveau matricule <?php echo $this->mat->matricule ;?>
            </h1 >

        </div >
        <div class="col-md-10 col-sm-10  text-center animated bounceOutDown delay-2s" style="margin-left: 8%;"><i class="fa fa-spin fa-spinner text-center  " style="zoom:12;"></i> </div>
        <?php
         
         }
       


   


}
 ?>