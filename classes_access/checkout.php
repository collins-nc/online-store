<?php

class checkout extends Dbh{
    private $items;

    public function check($item){
        $this->item = $item;
        $stmt = $this->connect()->prepare("SELECT * FROM product WHERE prid = ?;");
    
        if(!$stmt->execute(array($this->item))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfail");
        }else{
            $data = array();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $GLOBALS["name"] = $data[0]["_name"];
            $GLOBALS["desc"] = $data[0]["descript"];
            $GLOBALS["price"] = $data[0]["price"];

            echo $GLOBALS["name"]." ".$GLOBALS["desc"]." ".$GLOBALS["price"];
            

        }
    }
}
        
