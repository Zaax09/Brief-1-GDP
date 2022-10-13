<?php
require_once 'db-connect.php';
require_once 'promotion.php';

class PromotionDAL extends Connection {
 
    public function addPromotion($promotion){

        $name = $promotion->getName();
       
        $insertRow="INSERT INTO `promotion`(`id`, `names`) VALUES ('[value-1]','$name')";
                          
        mysqli_query($this->Connect(), $insertRow);
    }


        public function affichage(){
             $sql = "SELECT * FROM promotion";
             $result = mysqli_query($this->Connect(), $sql);
             if ($result->num_rows>0){
                while($row = $result -> fetch_assoc())
                $data[]=$row;
             }
             return $data;
}

        public function deleteID($delid){
            $sql = "DELETE FROM `promotion` WHERE id =$delid";
            $result = mysqli_query($this->Connect(), $sql);


            


        }
}


