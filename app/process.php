<?php
require_once('Baseclass.php');
ob_start();

use \App\Classes\SignupProcess as Signup;
use \App\Classes\Baseclass;
use \App\Classes\LoginProcess as Login;

$SignUp = new Signup();

if(isset($_POST["signup"])){
   if(isset($_SESSION["dontregisterusername"]) or isset($_SESSION["dontregisterpassword"])):
        
        Baseclass::redirectback('Bad Method');

   else:
        $params = [
            'userid' => uniqid(),
            'name' => ucwords(strtolower($_POST['name'])),
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'location' => $_POST['location'],
            'password' => Baseclass::Hash($_POST['password']),
            'status' => 'nonverified',
            'time'     => time(),
            'PRIMARY' => "email"
        ];
        $table = 'members';
        $signupuser = $SignUp->signup($params, $table);

        if($signupuser == true):
            header("location: ../auth/confirm.php");
        else:
            header("location: ../auth/failedsignup.php");
        endif;
    endif;
}

if(isset($_POST["login"])){
    $params = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    $Login = new Login();
    $get_login_status = $Login->login($params);

    if($get_login_status['success']){
        header("location: ../accounts/index.php");
    }
}