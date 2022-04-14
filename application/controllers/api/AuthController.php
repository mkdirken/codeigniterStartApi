<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."/core/MY_ApiCore.php");

class authController extends MY_ApiCore {


    function __construct(){
        parent::__construct();
        // LOAD MODEL
        $this->load->model('API/auth_model');
    }




    ////////////////////////////////////////////////////////////////////////////////////////////
    // Mail Login to the system  // ! POST
    ////////////////////////////////////////////////////////////////////////////////////////////
    public function email_login(){
        $_METHOD="POST";
        if($this->REQUEST_METHOD_CONTROL($_METHOD)){
            require APPPATH.'/dto/login_dto.php'; // GET DTO 

            // VALIDATION
            $this->form_validation->set_rules($EMAIL_LOGIN_DTO);
            if ($this->form_validation->run() == FALSE) {
                BuildResponse(400,translate('parameters_sent_are_wrong'),CONVERT_JSON_FORM_VALIDATIN_ERROR($EMAIL_LOGIN_DTO));
            } else {
                // GET FORM RULES DATA
                $FORM_DATA=GET_FIELDS_IN_FORM_RULES($EMAIL_LOGIN_DTO,$_METHOD);

                // USER CONTROL
                $USER=$this->auth_model->_email_login($FORM_DATA['email'],$FORM_DATA['password']);
                if($USER){
                    // SUCCESS LOGIN
                    $USER->id=___ssl_encrypt($USER->id);
                    unset($USER->password);
                    unset($USER->deleted_at);
                    // GENERATE JWT TOKEN
                    $this->load->library('JWT_TOKEN'); // LOAD JWT
                    $tokenData=$this->jwt_token->generateToken(array(
                        'user_id'=>$USER->id,
                        'email'=>$USER->email
                    ));
                    $USER->jwt=$tokenData;
                    BuildResponse(200,translate('login_successful'),$USER);
                }else{
                    BuildResponse(401,translate('login_information_is_incorrect'),"");
                }
            }

        }else{
            return $this->WRONG_REQUEST();
        }
      
    }     
    ////////////////////////////////////////////////////////////////////////////////////////////
    // END Mail Login to the system
    ////////////////////////////////////////////////////////////////////////////////////////////







    ////////////////////////////////////////////////////////////////////////////////////////////
    // Phone Login to the system  // ! POST
    ////////////////////////////////////////////////////////////////////////////////////////////
    public function phone_login(){
        $_METHOD="POST";
        if($this->REQUEST_METHOD_CONTROL($_METHOD)){
            require APPPATH.'/dto/login_dto.php'; // GET DTO 

            // VALIDATION
            $this->form_validation->set_rules($PHONE_LOGIN_DTO);
            if ($this->form_validation->run() == FALSE) {
                BuildResponse(400,translate('parameters_sent_are_wrong'),CONVERT_JSON_FORM_VALIDATIN_ERROR($PHONE_LOGIN_DTO));
            } else {
                // GET FORM RULES DATA
                $FORM_DATA=GET_FIELDS_IN_FORM_RULES($PHONE_LOGIN_DTO,$_METHOD);
                // USER CONTROL
                $USER=$this->auth_model->_phone_login($FORM_DATA['country_code'],$FORM_DATA['phone'],$FORM_DATA['password']);
                if($USER){
                    // SUCCESS LOGIN
                    $USER->id=___ssl_encrypt($USER->id);
                    unset($USER->password);
                    unset($USER->deleted_at);
                    // GENERATE JWT TOKEN
                    $this->load->library('JWT_TOKEN'); // LOAD JWT
                    $tokenData=$this->jwt_token->generateToken(array(
                        'user_id'=>$USER->id,
                        'email'=>$USER->email
                    ));
                    $USER->jwt=$tokenData;
                    BuildResponse(200,translate('login_successful'),$USER);
                }else{
                    BuildResponse(401,translate('login_information_is_incorrect'),"");
                }
            }

        }else{
            return $this->WRONG_REQUEST();
        }
      
    }     
    ////////////////////////////////////////////////////////////////////////////////////////////
    // END Phone Login to the system
    ////////////////////////////////////////////////////////////////////////////////////////////



}