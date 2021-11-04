<?php 
//sql code 
//communication to database 
class login extends Dbh{

    protected function getUser($username,$psw){
        $stmt = $this->connect()->prepare("SELECT _password FROM _user WHERE email = ?;");
        
        if(!$stmt->execute(array($username))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfail");
        }
        if($stmt->rowCount()==0){
            $stmt = null;
            header("Location: ../index.php?error=usernotfound");
            exit();
        }
        $pswhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpsw = password_verify($psw,$pswhashed[0]["_password"]);
        

        if($checkpsw == false){
            $stmt = null;
            header("Location: ../index.php?error=wrongpassword");
            exit();
        }elseif($checkpsw == true){
            $stmt = $this->connect()->prepare("SELECT * FROM _user WHERE email = ? ;");
            
            if(!$stmt->execute(array($username))){
                $stmt = null;
                header("Location: ../index.php?error=stmtfail");
            }
            if($stmt->rowCount()==0){
                $stmt = null;
                header("Location: ../index.php?error=usernotfound");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['userid'] = $user[0]["id"];
            $_SESSION['username'] = $user[0]["email"];
            $stmt = null;
            header("Location: ../index.php?logedin");

        }


    }
}