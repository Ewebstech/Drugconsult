<?php
namespace App\Classes;


use PDO;

class SignupProcess extends Baseclass{

    protected $db_conn;
    protected $base;
    protected $sendmail;

    function __construct(){
        require("db.php");
        //Initialize Baseclass
        $this->base = new Baseclass();
        $this->sendmail = new SendMail();
    }

    public function signup(Array $params, $table){

        //Create Table If Not Exists
        $create_table = $this->base->create_table_schema($params, $table);

        $insert_data = $this->base->insert_to_db($params,$table);

        if($insert_data === true){
            // Send Mail to User
            $reciever = $params['email'];
            
            $name = $params['name'];
            $confirm_link = $this->base->baseUrl("process.php?mail_confirmation&email=$reciever&name=$name");

            $subject = 'Hello '.$name.', Please Confirm Your Email Address to Get Started';
            $content = "<p>Hello ".$name.", kindly click on the link below to confirm your email address and get access to your set-up account.</p>
            
            <p>Click <a href='".$confirm_link."'> >> THIS LINK << </a> to confirm your email now</p>

            <p>Stay Safe, Stay Healthy!</p>

            <p><b><i>...Adding Value to Life</i></b></p>";

            $company = "Drug Consult Pharmacy";
            $logo_url = $this->base->baseUrl('img/drugconsultlogo.jpg');

            $status = $this->sendmail->SendMail($subject, $content, $reciever, $company, $logo_url);
          
        }
        return ($status['success']) ? true : false;

    } 

    public function update(){
        // $update_params = [
        //     'name' => 'Emmanuel',
        //     'mobile' => '08133918455'
        // ];
        // $where = [
        //     'email' => 'ewebstech@ymail.com',
        //     'userid' => '5b4a95068c5ef'
        // ];

        // $update_table = $this->base->update_db($update_params, $table, $where);
    }

}