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
function check_pracetak(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1){
        redirect('pracetak/SuratOrder');
    }
}
function check_pracetak_imposisi(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1 && $ci->fungsi->user_login()->level != 4 && $ci->fungsi->user_login()->level != 6){
        redirect('pracetak/SuratOrder');
    }
}
function check_pracetak_ctcp(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1 && $ci->fungsi->user_login()->level != 5 && $ci->fungsi->user_login()->level != 6){
        redirect('pracetak/SuratOrder');
    }
}
function check_finishing(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 3 && $ci->fungsi->user_login()->level != 6){
        redirect('finishing/Display');
    }
}
function check_finishing_operator(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 3 && $ci->fungsi->user_login()->level != 7 && $ci->fungsi->user_login()->level != 6){
        redirect('pracetak/SuratOrder');
    }
}
function check_pracetak_admin(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 6){
        redirect('pracetak/SuratOrder');
    }
}
function check_already_login_cetak(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session){
        redirect('cetak/DisplayUmum');
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