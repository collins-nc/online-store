<?php

class signupContr extends signup{

    private $first;
    private $last;
    private $email;
    private $birth;
    private $password;
    private $re_password;

    public function __construct($first,$last,$email,$birth,$password,$re_password)
    {
        $this->first = $first;
        $this->last = $last;
        $this->email = $email;
        $this->birth = $birth;
        $this->password = $password;
        $this->re_password = $re_password; 
    }
   public function signuser(){
        if($this->emptyInput() == true){
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false){
            header("Location: ../index.php?error=invalidemail");
            exit();
        }
        if($this->invalidName() == false){
            header("Location: ../index.php?error=invalidname");
            exit();
        }
        if($this->invalidSurname() == false){
            header("Location: ../index.php?error=invalidsurname");
            exit();
        }
        if($this->confirmPsw() == false){
            header("Location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->takenemail() == false){
            header("Location: ../index.php?error=emailtaken");
            exit();
        }
        $this->setUser($this->first,$this->last,$this->email,$this->birth,$this->password);
    }
    private function emptyInput(){
        
        if(empty($this->first) || empty($this->last) || empty($this->email) || empty($this->password) || empty($this->re_password)){
            $result = true;    
        }else{
            $result = false; 
        }
        return $result;
    }
    private function invalidEmail(){
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function invalidName(){
        if(!preg_match("/^[a-zA-Z]*$/",$this->first)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function invalidSurname(){
        if(!preg_match("/^[a-zA-Z]*$/",$this->last)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function confirmPsw(){
        if($this->password !== $this->re_password){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function takenemail(){
        //run checkEmail function from signup to check data on database 
        if(!$this->checkEmail($this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }


}