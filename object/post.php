<?php

class Post  // מחלקה לכל הפוסטים שהמשתמשים כותבים באתר
{
    private $post_id;
    private $user_id;
    private $post_title;
    private $post_content;
    private $post_date;

    public function __construct(int $user_id, string $post_title, string $post_content) // בנאי הפוסט מקבל מזהה משתמש, כותרת פוסט, תוכן הפוסט, ותאריך
    {
        $this->user_id = $user_id;
        $this->post_title = $post_title;
        $this->post_content = $post_content;

    }

    public function getUser_id(){  // פונקציה מחזירה מזהה משתמש
        return $this->user_id;
    }

    public function getPost_title(){   // פונקציה מחזירה כותרת פוסט
        return $this->post_title;
    }

    public function getPost_content(){   // פונקציה מחזירה תוכן הפוסט
        return $this->post_content;
    }  
    
    public function getPost_date(){   // פונקציה מחזירה תאריך הפוסט
        return $this->post_date;
    }
}

?>

<!-- טל סלילת נוי לרמן ברוך ליבוביץ/ 44/1 -->