<?php
namespace App\Classes;


use PDO;

class SignupProcess extends Baseclass{

    protected $db_conn;
    protected $base;

    function __construct(){
        require("db.php");
        //Initialize Baseclass
        $this->base = new Baseclass();
    }

    public function signup(Array $params, $table){

        //Create Table If Not Exists
        $create_table = $this->base->create_table_schema($params, $table);

        $insert_data = $this->base->insert_to_db($params,$table);

        if($insert_data === true){
            // Send Mail to User

            $output['success']  = "Data Successfully Inserted";
            return $output;

        }

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