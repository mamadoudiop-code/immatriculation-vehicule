<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class genere extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('text_helper');
        $this->load->helper('security');

        //initialisation de la session
        $this->load->library('calendar') ;
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('javascript');
    }

    public function index()
    {
         // chemin d'accès à votre fichier JSON
        $file =  'csv.json';
// mettre le contenu du fichier dans une variable
        $data = file_get_contents($file);
// décoder le flux JSON
        $obj = json_decode($data);
// accéder à l'élément approprié

        echo $obj[0]->nombre;
        $obj[0]->nombre = $obj[0]->nombre+1;
        $newJsonString = json_encode($obj);
        file_put_contents('csv.json', $newJsonString);







}}

