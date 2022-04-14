<?php

// * EMAIL LOGIN DTO
    $EMAIL_LOGIN_DTO=array(
        array('field'=>'email','label'=>translate('email'),'rules'=>'required|trim|valid_email'),
        array('field'=>'password','label'=>translate('password'),'rules'=>'required|trim'),
    );
// * END EMAIL LOGIN DTO


// * PHONE LOGIN DTO
$PHONE_LOGIN_DTO=array(
    array('field'=>'phone','label'=>translate('phone'),'rules'=>'required|trim'),
    array('field'=>'country_code','label'=>translate('country_code'),'rules'=>'required|trim'),
    array('field'=>'password','label'=>translate('password'),'rules'=>'required|trim'),
);
// * END PHONE LOGIN DTO