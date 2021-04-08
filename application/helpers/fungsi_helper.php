<?php

function check_already_login_pracetak(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session){
        redirect('pracetak/SuratOrder');
    }
}

function check_not_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if(!$user_session){
        redirect('auth/index');    
    }
}

function check_already_login_cetak(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session){
        redirect('cetak/Cetak');
    }
}

// function check_not_login_cetak(){
//     $ci =& get_instance();
//     $user_session = $ci->session->userdata('id_user');
//     if(!$user_session){
//         redirect('auth/index');    
//     }
// }
function check_already_login_finishing(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session){
        redirect('finishing/Finishing');
    }
}

// function check_not_login_finishing(){
//     $ci =& get_instance();
//     $user_session = $ci->session->userdata('id_user');
//     if(!$user_session){
//         redirect('auth/index');    
//     }
// }