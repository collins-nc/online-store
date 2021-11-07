<?php

class checkout extends Dbh{
    private $items;

    public function check($item){
        $this->items = $item;
        $stmt = $this->connect()->prepare("SELECT * FROM product WHERE prid = ?;");
    
        if(!$stmt->execute(array($this->items))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfail");
        }else{
            $data = array();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $sline ="name=".$data[0]['_name']."&descrip=".$data[0]['descript']."&price=".$data[0]['price'];
            
            return $sline;

        }
    }
}
        

        
