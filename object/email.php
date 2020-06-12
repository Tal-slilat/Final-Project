<?php

class MyEmail // מחלקה לכל המיילים ששולחים מהאתר
{
    private $email_id;
    private $subject;
    private $message;
    private $from_user;

    public function __construct(string $subject, string $message, string $from_user) 
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->from_user = $from_user;
    }

    public function getSubject(){  // פונקציה המחזירה את נושא ההודעה
        return $this->subject;
    }

    public function getMessage(){   // פונקציה מחזירה את תוכן ההודעה
        return $this->message;
    }

    public function getFromUser(){   // פונקציה מחזירה את כתובת אימייל השולח
        return $this->from_user;
    }  
}

?>

