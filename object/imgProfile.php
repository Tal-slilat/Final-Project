<?php

class imgProfile // מחלקה לתמונות פרופיל
{
    private $img_id;
    private $user_id;
    private $img_link;
    private $img_date;

    public function __construct(string $user_id, string $img_link, string $img_date) 
    {
        $this->user_id = $user_id;
        $this->img_link = $img_link;
        $this->img_date = $img_date;
    }

    public function getUserId(){  // פונקציה המחזירה את המספר משתמש שהעלה את התמונה
        return $this-user_id;
    }

    public function getImgLink(){   // פונקציה מחזירה את מסלול התמונה
        return $this->img_link;
    }

    public function setImgLink($img){   // פונקציה שמחליפה את התמונה הנוכחית
        return $this->img_link = $img;
    }

    public function getImgDate(){   // פונקציה מחזירה את התאריך שהתמונה נכנסה למסד נתונים
        return $this->img_date;
    }
}

?>

<!-- טל סלילת נוי לרמן ברוך ליבוביץ/ 44/1 -->