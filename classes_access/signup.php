<?php 
//sql code 
//communication to database 
class signup extends Dbh{

    protected function setUser($name,$last,$email,$datebirth,$psw){
        $stmt = $this->connect()->prepare("INSERT INTO _user(_name,surname,email,birth,_password) VALUES(?,?,?,?,?);");
        $hashed_psw = password_hash($psw,PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($name,$last,$email,$datebirth,$hashed_psw))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfail");
        }
        $stmt = null;
    }

    protected function checkEmail($email){
        $stmt = $this->connect()->prepare("SELECT email FROM _user WHERE email = ?;");
        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfail");
        }
        if($stmt->rowCount()>0){
            $result = false;
        }else{
            $result = true;
        }
        return $result;

    }
}