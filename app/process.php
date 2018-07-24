<?php
require_once('Baseclass.php');
ob_start();

use \App\Classes\SignupProcess as Signup;
use \App\Classes\Baseclass;
use \App\Classes\LoginProcess as Login;

$SignUp = new Signup();
$base = new Baseclass();
$Login = new Login();


if(isset($_POST["signup"])){
   if(isset($_SESSION["dontregisterusername"]) or isset($_SESSION["dontregisterpassword"])):
        
    $base->redirectback('Bad Method');

   else:
        $params = [
            'userid' => uniqid(),
            'name' => ucwords(strtolower($_POST['name'])),
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'location' => $_POST['location'],
            'password' => $base->Hash($_POST['password']),
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

    
    $get_login_status = $Login->login($params);

    if($get_login_status['success']){
        header("location: ../accounts/index.php");
    }
}

if(isset($_REQUEST['mail_confirmation'])){

    //Check Get args with DB
    $param = htmlentities($_REQUEST['email']);
    $name = htmlentities($_REQUEST['name']);
    $checkemail = $base->validate_email($param);

    echo"You will be redirected in <b> 3 Seconds</b> \n";

    if($checkemail == false){
        $base->redirectback();
    }
    else{
       
        // confirm user and redirect to dashboard
        $table = 'members';

        $update_params = [
            'status' => 'verified'
        ];
        $where = [
            'email'  => $param,
            'name'  => $name
        ];
        
        $update_status = $base->update_db($update_params, $table, $where);

        if($update_status == true):
            // Send to dashboard
            sleep("3");
            $params = [
                'email' => $param,
                'password' => $_POST['password']
            ];
        
            
            $get_login_status = $Login->login($params);
        
            if($get_login_status['success']){
                header("location: ../accounts/index.php");
            }

            //header("location: ../accounts/index.php");
        endif;
        
    }

}