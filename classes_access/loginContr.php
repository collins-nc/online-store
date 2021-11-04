<?php

class loginContr extends login{

    private $username;
    private $password;

    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }
   public function loginuser(){
        if($this->emptyInput() == false){
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->username,$this->password);
    }
    private function emptyInput(){
        
        if(empty($this->email) || empty($this->password)){
            $result = true;    
        }else{
            $result = false; 
        }
        return $result;
    }

}