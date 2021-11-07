<?php
    session_status() === PHP_SESSION_ACTIVE ?: session_start();


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
            $data = $stmt->fetch();
            $stmt = null;
            $stmt = $this->connect()->prepare("INSERT INTO _order(id,email,product,_desc,_price) VALUES(?,?,?,?,?);");
            if(!$stmt->execute(array($_SESSION["userid"],$_SESSION["username"],$data["_name"],$data["descript"],$data["price"]))){
            header("Location: ../index.php?error=stmtfail");
            }
        }
    }

    public function getdata(){
        
        $stmt = $this->connect()->prepare("SELECT * FROM _order;");
    
        if(!$stmt->execute(array($this->items))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfail");
        }
        $line = "";
        while($data = $stmt->fetch()){
            $line.= "<tr>
            <td>
            {$data['product']}
            </td>	
            <td>
            {$data['_desc']}
            </td>
            <td scope='col' colspan='2'>
            <strong>R</strong>{$data['_price']};
            </td>
        </tr>";
        }
        return $line;


    }
}
        
