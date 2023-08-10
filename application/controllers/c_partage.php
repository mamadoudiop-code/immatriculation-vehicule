<?php

class c_partage extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
                $this->load->library('user_agent');

			if ($this->agent->is_browser())
			{
			        $agent = $this->agent->browser().' '.$this->agent->version();
			}
			elseif ($this->agent->is_robot())
			{
			        $agent = $this->agent->robot();
			}
			elseif ($this->agent->is_mobile())
			{
			        $agent = $this->agent->mobile();
			}
			else
			{
			        $agent = 'Unidentified User Agent';
			}

echo "vous vous connecter dans ".$agent." systéme d'exploatation: ";

echo $this->agent->platform();
        }

        public function do_upload()
        {
                $config['upload_path']          = './partage/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|docx';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }


        }
}