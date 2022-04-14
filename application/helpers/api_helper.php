<?php


// * ////////////////////////////////////////////////////////////////////////////////
// ! BUILD RESPONSE
// * ////////////////////////////////////////////////////////////////////////////////
    if(!function_exists('BuildResponse')){
        function BuildResponse($status,$message,$data){
            $ci = &get_instance();
            $ci->output->set_status_header($status)->set_content_type('application/json');
            echo json_encode(array('statusCode'=>$status,'message'=>$message,'data'=>$data));
        }
    }
// * ////////////////////////////////////////////////////////////////////////////////
// ! END BUILD RESPONSE
// * ////////////////////////////////////////////////////////////////////////////////


// * ////////////////////////////////////////////////////////////////////////////////
// ! HTTP STATUS CODE FUNCTION
// * ////////////////////////////////////////////////////////////////////////////////
    if(!function_exists('HttpStatus')){
        function HttpStatus($code) {
            $status = array(
                100 => 'Continue',  
                101 => 'Switching Protocols',  
                200 => 'OK',
                201 => 'Created',  
                202 => 'Accepted',  
                203 => 'Non-Authoritative Information',  
                204 => 'No Content',  
                205 => 'Reset Content',  
                206 => 'Partial Content',  
                300 => 'Multiple Choices',  
                301 => 'Moved Permanently',  
                302 => 'Found',  
                303 => 'See Other',  
                304 => 'Not Modified',  
                305 => 'Use Proxy',  
                306 => '(Unused)',  
                307 => 'Temporary Redirect',  
                400 => 'Bad Request',  
                401 => 'Unauthorized',  
                402 => 'Payment Required',  
                403 => 'Forbidden',  
                404 => 'Not Found',  
                405 => 'Method Not Allowed',  
                406 => 'Not Acceptable',  
                407 => 'Proxy Authentication Required',  
                408 => 'Request Timeout',  
                409 => 'Conflict',  
                410 => 'Gone',  
                411 => 'Length Required',  
                412 => 'Precondition Failed',  
                413 => 'Request Entity Too Large',  
                414 => 'Request-URI Too Long',  
                415 => 'Unsupported Media Type',  
                416 => 'Requested Range Not Satisfiable',  
                417 => 'Expectation Failed',  
                500 => 'Internal Server Error',  
                501 => 'Not Implemented',  
                502 => 'Bad Gateway',  
                503 => 'Service Unavailable',  
                504 => 'Gateway Timeout',  
                505 => 'HTTP Version Not Supported');
            return $status[$code] ? $status[$code] : $status[500];
        }
    }
// * ////////////////////////////////////////////////////////////////////////////////
// ! END HTTP STATUS CODE FUNCTION
// * ////////////////////////////////////////////////////////////////////////////////






// * ////////////////////////////////////////////////////////////////////////////////
// ! ENCRYPT - DENCRYPT
// * ////////////////////////////////////////////////////////////////////////////////
$GLOBALS['SIFRELEME_METODU'] = "AES-256-CBC";
$GLOBALS['SIFRELEME'] = "d1c89dbbd2e4ef759c37d3e0b94e7327d1c89dbbd2e4ef759c37d3e0b94e7327d1c89dbbd2e4ef759c37d3e0b94e7327";
if(!function_exists('___ssl_decrypt')){
    function ___ssl_decrypt($CIKTI){
        return @openssl_decrypt(base64_decode($CIKTI), $GLOBALS['SIFRELEME_METODU'], $GLOBALS['SIFRELEME']);
    }
}
if(!function_exists('___ssl_encrypt')){
    function ___ssl_encrypt($DATA){
        return base64_encode(@openssl_encrypt($DATA, $GLOBALS['SIFRELEME_METODU'], $GLOBALS['SIFRELEME']));
    }
}
// * ////////////////////////////////////////////////////////////////////////////////
// ! END ENCRYPT - DENCRYPT
// * ////////////////////////////////////////////////////////////////////////////////




// * ////////////////////////////////////////////////////////////////////////////////
// ! TRANSLATE
// * ////////////////////////////////////////////////////////////////////////////////
if (!function_exists("translate")){
    function translate($line){
        $CI=get_instance();
        $item=$CI->lang->line($line);
        if($item!=""){
            return $item;
        }
        return $line;
    }
}
// * ////////////////////////////////////////////////////////////////////////////////
// ! TRANSLATE
// * ////////////////////////////////////////////////////////////////////////////////



// * ////////////////////////////////////////////////////////////////////////////////
// ! CONVERT JSON FORM VALIDATION ERROR
// * ////////////////////////////////////////////////////////////////////////////////
if(!function_exists("CONVERT_JSON_FORM_VALIDATIN_ERROR")){
    function CONVERT_JSON_FORM_VALIDATIN_ERROR($FORM_KURALLARI){
        $data=array();
        $data['_message']=validation_errors();
        foreach ($FORM_KURALLARI as $item){
            if(@$item['field']!="" && form_error($item['field'])) {
                $data[$item['field']] = form_error($item['field']);
            }
        }
        return $data;
    }
}

// * ////////////////////////////////////////////////////////////////////////////////
// ! CONVERT JSON FORM VALIDATION ERROR
// * ////////////////////////////////////////////////////////////////////////////////




// * ////////////////////////////////////////////////////////////////////////////////
// ! GET FIELDS IN FORM RULES
// * ////////////////////////////////////////////////////////////////////////////////
if(!function_exists("GET_FIELDS_IN_FORM_RULES")){
    function GET_FIELDS_IN_FORM_RULES($FORM_RULES,$METHOD){
        $CI=&get_instance();
        $data=array();
        foreach ($FORM_RULES as $set){
            if(@$set['field']!=""){
                switch ($METHOD) {
                    case "GET":
                        $REQUEST_ITEM=$CI->input->get($set['field']);
                    break;
                    case "DELETE":
                        $REQUEST_ITEM=$CI->input->delete($set['field']);
                    break;
                    case "PUT":
                        $REQUEST_ITEM=$CI->input->put($set['field']);
                    break;
                    default:
                         $REQUEST_ITEM=$CI->input->post($set['field']);
                    break;
                }
                $data[$set['field']]=trim($REQUEST_ITEM);
            }

        }
        return $data;
    }
}
// * ////////////////////////////////////////////////////////////////////////////////
// ! END GET FIELDS IN FORM RULES
// * ////////////////////////////////////////////////////////////////////////////////