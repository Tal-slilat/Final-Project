<?php

Class User // מחלקה אבסטרקטית שהמשתמש "בעל כלב" יורש ממנה
{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password; 

   public function getId(){
        return $this->id;
    }


   public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($ﬁrstName){
        $this->firstName = $firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }
    
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($Password){
        $this->password = password_hash($Password, PASSWORD_DEFAULT);
    }
}
?>


<!-- טל סלילת נוי לרמן ברוך ליבוביץ/ 44/1 -->