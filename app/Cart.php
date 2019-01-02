<?php
namespace App\Classes;

use PDO;

class Cart extends Baseclass{

    protected $db_conn;
    protected $base;
    protected $sendmail;

    function __construct(){
        require("db.php");
        //Initialize Baseclass
        $this->base = new Baseclass();
        $this->sendmail = new SendMail();
    }

    public function addToCart(Array $params, $table){
          //Create Table If Not Exists
        $create_table = $this->base->create_table_schema($params, $table);
        // Check if Product is already added to cart
        $query = "SELECT * FROM `cart`";
        $where = [
            'cartid' => session_id(),
            'product' => $params['product']
        ];
        try{
            $cart_products = $this->base->pdoquery($query,$fetch="",$extra_query=null,$where);
            if(!$cart_products){
                $insert_data = $this->base->insert_to_db($params,$table);

                if($insert_data === true){
                    
                    return true;
                }
                else{
                    return false;
                }
            } else {
                // Update the qty
                $update_params = [
                    'qty' => $params['qty'],
                ];
                $where = [
                    'cartid' => session_id(),
                    'product' => $params['product']
                ];

                $update_data = $this->base->update_db($update_params,$table,$where);
                if($update_data){
                    return true;
                } else {
                    return false;
                }
            }

        }catch(Exception $e){
            $this->errors = $e->getMessage();
            return $this->errors;
        }

        
    }

    public function ShowCart(){
        $query = "SELECT * FROM `cart`";
        $extra_query = "ORDER BY time desc";
        $where = [
            'cartid' => session_id()
        ];
        try{
            $cart_products = $this->base->pdoquery($query,$fetch="all",$extra_query,$where);
        }catch(Exception $e){
            $this->errors = $e->getMessage();
        }

        $i = 1;

        foreach($cart_products as $items){
            $cart .= "<div id='item$i'><span style='font-size: 12px; font-weight: bold;'> $items[product] x [ $items[qty] ]</span><span style='float: right; '><a href=\"#\" id=\"delItem$i\" onclick=\"javascript:removeElement('item$i','$items[product_id]'); return false;\"  class=\"delItem\"><i class=\"fa fa-trash-o\"></i></a></span><hr></div>";  
            
            $i++;
        }
        
        return $cart;
    }

}