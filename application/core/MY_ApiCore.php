<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_ApiCore extends CI_Controller {

    function __construct() // SINIF CAGIRILDIGINDA ILK CALISAN FONKSIYON
    {
        parent::__construct(); // CODEIGNITERIN CONTROLLER ICERIKLERINI CALISTARALIM
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('security');
        $this->load->helper('api');
        $this->load->library('parser');


        $this->lang->load('en/load','api');

        // FORM MESAJLARININ TERCÜMESİ
        $this->form_validation->set_message($this->FORM_MESAJLARINI_TERCUME_ET());

    }


// * ////////////////////////////////////////////////////////////////////////////////
// ! HTTP RREQUEST_METHOD CONTROL
// * ////////////////////////////////////////////////////////////////////////////////
    public function REQUEST_METHOD_CONTROL($method){
        $_method = $_SERVER["REQUEST_METHOD"];
        if($_method==$method){
            return TRUE;
        }
        return FALSE;
    }
// * ////////////////////////////////////////////////////////////////////////////////
// ! END HTTP RREQUEST_METHOD CONTROL
// * ////////////////////////////////////////////////////////////////////////////////



// * ////////////////////////////////////////////////////////////////////////////////
// ! HTTP WRONG_REQUEST
// * ////////////////////////////////////////////////////////////////////////////////
    public function WRONG_REQUEST(){
        $this->output->set_status_header(404);
    }
// * ////////////////////////////////////////////////////////////////////////////////
// ! END HTTP WRONG_REQUEST
// * ////////////////////////////////////////////////////////////////////////////////





    


    function FORM_MESAJLARINI_TERCUME_ET(){
        $error_message=array(
            'required'=>$this->lang->line('form_validation_required'),
            'isset'=>$this->lang->line('form_validation_isset'),
            'valid_email'=>$this->lang->line('form_validation_valid_email'),
            'valid_url'=>$this->lang->line('form_validation_valid_url'),
            'valid_emails'=>$this->lang->line('form_validation_valid_emails'),
            'valid_ip'=>$this->lang->line('form_validation_valid_ip'),
            'min_length'=>$this->lang->line('form_validation_min_length'),
            'max_length'=>$this->lang->line('form_validation_max_length'),
            'exact_length'=>$this->lang->line('form_validation_exact_length'),
            'alpha'=>$this->lang->line('form_validation_alpha'),
            'alpha_numeric'=>$this->lang->line('form_validation_alpha_numeric'),
            'alpha_numeric_spaces'=>$this->lang->line('form_validation_alpha_numeric_spaces'),
            'alpha_dash'=>$this->lang->line('form_validation_alpha_dash'),
            'numeric'=>$this->lang->line('form_validation_numeric'),
            'is_numeric'=>$this->lang->line('form_validation_is_numeric'),
            'integer'=>$this->lang->line('form_validation_integer'),
            'regex_match'=>$this->lang->line('form_validation_regex_match'),
            'matches'=>$this->lang->line('form_validation_matches'),
            'differs'=>$this->lang->line('form_validation_differs'),
            'is_unique'=>$this->lang->line('form_validation_is_unique'),
            'is_natural'=>$this->lang->line('form_validation_is_natural'),
            'is_natural_no_zero'=>$this->lang->line('form_validation_is_natural_no_zero'),
            'decimal'=>$this->lang->line('form_validation_decimal'),
            'less_than'=>$this->lang->line('form_validation_less_than'),
            'less_than_equal_to'=>$this->lang->line('form_validation_less_than_equal_to'),
            'greater_than'=>$this->lang->line('form_validation_greater_than'),
            'greater_than_equal_to'=>$this->lang->line('form_validation_greater_than_equal_to'),
            'error_message_not_set'=>$this->lang->line('form_validation_error_message_not_set'),
            'in_list'=>$this->lang->line('form_validation_in_list'),
        );
        return $error_message;
    }


}