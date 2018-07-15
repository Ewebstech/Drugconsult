<?php
namespace App\Classes;

require_once __DIR__ . '/SignupProcess.php';
require_once __DIR__ . '/LoginProcess.php';

use PDO;

class Baseclass{ 

    protected $db_conn;
    protected $error;

    public function __construct()
    {
        require("db.php");
        //start session
        if(!isset($_SESSION)):
            session_start();
        endif;
    }
    /**
     * Create Table Schema with the Column names defined in $params
     *
     * @param Array $params 
     * @param [type] $table
     * @return void
     */
    protected function create_table_schema(Array $params, $table){

        foreach($params as $column => $value){
            if($column != 'PRIMARY'):
                if($column == "userid" or $column == "time" or $column == "id"){
                    $varchar = "50";
                    }
                else{
                    $varchar = "240";
                }
                $cols[] =  $column." VARCHAR (".$varchar.") NOT NULL,";
            endif;
            if($column == "PRIMARY"){
                $cols[]  = "PRIMARY KEY (".$value.")";
            }
        }
        $table_string = implode(' ', $cols);
        
        try{
                
            $create_tbl = "	Create Table if not exists `$table` ($table_string)";

            $c = $this->db_conn->exec($create_tbl);
            
        }catch (PDOException $e){
            // report error message
            $this->error =  $e->getMessage();
        }

        return ($this->error) ? $this->error : true;

    }

    /**
     * Method for Inserting to DB
     * Usage: The field names must correspond to table column names else app would break!
     * 'PRIMARY' => key - must always be inserted in the case of auto table creation.
     *  $params = [
     *    'userid' => uniqid(),
     *   'name' => ucwords(strtolower($_POST['name'])),
      *  'email' => $_POST['email'],
     *   'mobile' => $_POST['mobile'],
     *   'location' => $_POST['location'],
     *   'password' => $_POST['password'],
     *   'time'     => time(),
     *   'PRIMARY' => "email"
    *   ]; 
     * @param Array $params [contains all properties to be inserted]
     * @param [type] $table [Table to insert data into]
     * @return void
     */
    protected function insert_to_db(Array $params, $table)
    {
        //Get all column names
        foreach($params as $column => $value){
            if($column != 'PRIMARY'):
                $columns[] = $column;
            endif;
            if($column != 'PRIMARY'):
                $values[] = ':'.$column;
            endif;
        }
        $column_string = implode(', ', $columns);
         $value_string = implode(', ', $values);

        unset($params['PRIMARY']);
        //var_dump($params);
        $data = $params;
        try{
            $sql = "INSERT INTO $table ($column_string) VALUES ($value_string)";
            $stmt = $this->db_conn->prepare($sql);
            $stmt->execute($data);
        }catch(PDOException $e){
            $this->error =  $e->getMessages();
        }

        return ($this->error) ? $this->error : true;

    }

    /**
     * Update Database 
     * Usage: Method expects 3 arguments
     * $update_params = [
     *           'column' => 'Value to Update',
     *       ];
     *       $where = [
     *           'email' => 'ewebstech@ymail.com',
     *       ];
     * 
     * @param Array $params [Update Params]
     * @param [type] $table [DB table to update]
     * @param [type] $where [unique key to perform udpdate]
     * @return void
     */
    protected function update_db(Array $params, $table, $where)
    {
        //Get all column names
        foreach($params as $column => $value){
            $columns[] = $column ." = " .":".$column;       
        }
        // Where ?
        foreach($where as $col => $val){
            $cols[] = $col ." = " .":".$col;
        }
        $column_string = implode(', ', $columns);
        $where_string = implode(' AND ', $cols);
        
        //unset($params['PRIMARY']);
       
        $data = array_merge($params,$where);
       
        try{
            $sql = "UPDATE $table SET $column_string WHERE $where_string";
            $stmt = $this->db_conn->prepare($sql);									 
            $stmt->execute($data);
        }catch(PDOException $e){
            $this->error =  $e->getMessages();
        }

        return ($this->error) ? $this->error : true;


    }

    public function Hash($arg){
        $password = md5($arg);
        $sub_str = substr("$password", 0, 2);
        $c_pass = CRYPT("$password","$sub_str");
        $hashedpwd = substr("$c_pass", 2);

        return $hashedpwd;
    }

    public function redirectback($req=''){
        $from = $_SERVER['HTTP_REFERER'];
        if(($req)):
            header("location: ".$from."?$req");
        else:
            header("location: ".$from."");
        endif;
    }


}
