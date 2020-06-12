<?php
include_once "dogOwner.php";
include_once "email.php";
include_once "post.php";
// include_once "..\object\actions.php";

class dbClass                  //מחלקה שמגדירה את מסד הנתונים
{
    private $host;
    private $db;
    private $charset;
    private $user;
    private $pass;
    private $opt = array(
    PDO::ATTR_ERRMODE      => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);
    private $connection;
    
    //בנאי המחלקה
    public function __construct(string $host="localhost",string $db="cute_monster",string $charset="utf8",string $user="root", string $pass="")
    {
        $this->host = $host;
        $this->db = $db;
        $this->charset = $charset;
        $this->user = $user;
        $this->pass = $pass;
    }

    private function connect()      //פונקציה עזר להתחברות למסד הנתונים
    {
        $dns ="mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
    
        $this->connection=new PDO($dns,$this->user,$this->pass,$this->opt);
    }

    public function disconnect()    //פונקצית עזר להתנתקות ממסד הנתונים
    {
        $this->connection = null; 
    }


    public function getAllUsers()   //פונקציה המחזירה את כל משתמשי האתר
    {

        $this->connect();           //מתחבר למסד הנתונים
        $sql = "SELECT * FROM dogowner";    //יוצר משתנה שתופס את השאילתה
    
        $dogOwnerArray=array();             //יוצר מערך למשתמשים
        $result = $this->connection->query($sql);       //יוצר משתנה אשר תופס את התשובה ממסד הנתונים
        while($row=$result->fetchObject('dogOwner')) {      //מציב את כל הטבלה של משתמשים בתוך המערך שיצרנו
            $dogOwnerArray[] = $row;
        }
        $this->disconnect();                //התנתקות ממסד הנתונים
            return $dogOwnerArray;          //מחזיר את המערך של המשתמשים
            // return ["flag" => 1, "arr" => $dogOwnerArray ];
        }

    //פונקציה המכניסה למסד הנתונים משתמש חדש בעל כלב
    public function insertNewUserDogOwner( $obj_dog_owner) // echo $reg_owner['email']['val']
     {
 
        try { 
            // בדיקה האם קיים לנו כבר משתמש עם אותה כתובת מייל
            $sql = "SELECT count(email) as `cnt` FROM dogowner WHERE email = ?";
            $this->connect();
            $stmt = $this->connection->prepare($sql);
            
            $res = $stmt->execute([$obj_dog_owner->getEmail()]);

            $row = $stmt->fetch(PDO::FETCH_ASSOC); 

                
            if ($row['cnt'] > 0) {// אם יש אימייל תואם במסד נתונים, לא ייתן לי להוסיף משתמש חדש עם אימייל זהה
                return ["flag" => -1];
            }

             $sql = "INSERT INTO dogowner (firstName,LastName,email,`password`,dogKind,dogName) VALUES (?,?,?,?,?,?)";
                $stmt = $this->connection->prepare($sql);
                $stmt->execute([ $obj_dog_owner->getFirstName(),$obj_dog_owner->getLastName(),$obj_dog_owner->getEmail(),$obj_dog_owner->getPassword(),$obj_dog_owner->getDogKind(),$obj_dog_owner->getDogName()]);

            $this->disconnect(); // מתנתק ממסד הנתונים
            return ["flag" => 1]; // אם הדגל = 1 הכל הצליח ואפשר להמשיך


        }
        catch(Exception $e) {
            return ["flag" => 0]; // אם הדגל = 0 יופיע הודעת שגיאה
        }
    }

 public function insertNewPost($obj_post) { // פונקציה להכנסת פוסט למסד הנתונים
try { 
    $this->connect(); // התחברות

    $sql = "INSERT INTO posts (user_id,post_title,post_content) VALUES (?,?,?)"; // יוצר משתנה עם השאילתא להכנסת נתונים לטבלת פוסט
    $stmt = $this->connection->prepare($sql);
    $stmt->execute([ $obj_post->getUser_id(),$obj_post->getPost_title(),$obj_post->getPost_content()]);

    $this->disconnect(); // התנתקות
    return ["flag" => 1];
}
    catch(Exeception $e) {
        return ["flag" => 0];
    }
}

//_______________________________post_______________________________________
public function getAllPosts() { // פונקציה להוצאת כל הפוסטים מהמסד נתונים
    $arr_posts = [];
        try { 
        $sql = "SELECT * FROM posts INNER JOIN dogowner ON posts.user_id = dogowner.id ";
        $this->connect();
        $stmt = $this->connection->prepare($sql);
        $res = $stmt->execute([]);
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $arr_posts [] = $row;
        } 

        return ["flag" => 1, "arr" => $arr_posts ];

        }
        catch(Exception $e) {
            return ["flag" => 0];
        }
}

//___________________________________email________________________________
    public function insertNewEmail($obj_mail) { // פונקציה להכנסה מייל חדש מהאתר
        try { 
            $sql = "INSERT INTO email (subject,message,from_user) VALUES (?,?,?)";
            $this->connect();
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([ $obj_mail->getSubject(), $obj_mail->getMessage(),$obj_mail->getFromUser()]);
            $this->disconnect();
           return ["flag" => 1];
        }
        catch(Exeception $e) {
            return ["flag" => 0];
        
        }
    }



//___________________________________image________________________________
    //    function insertNewImg($obj_imgPro) { // פונקציה להכנסה תמונה חדשה מהאתר
    //     try { 
    //         $sql = "INSERT INTO image (user_id,img_link,img_date) VALUES (?,?,?)";
    //         $this->connect();
    //         $stmt = $this->connection->prepare($sql);
    //         $stmt->execute([ $obj_imgPro->getUserId(), $obj_imgPro->getImgLink(),$obj_imgPro->getImgDate()]);
    //         $this->disconnect();
    //        return ["flag" => 1];
    //     }
    //     catch(Exeception $e) {
    //         return ["flag" => 0];
        
    //     }
    // }

    //_______________________________image_______________________________________
//     public function getAllImg() { // פונקציה להוצאת כל התמונות מהמסד נתונים
//     $arr_img = [];
//         try { 
//         $sql = "SELECT * FROM image INNER JOIN dogowner ON image.user_id = dogowner.id ";
//         $this->connect();
//         $stmt = $this->connection->prepare($sql);
//         $res = $stmt->execute([]);
        
//         while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//                 $arr_img [] = $row;
//         } 

//         return ["flag" => 1, "arr" => $arr_img];

//         }
//         catch(Exception $e) {
//             return ["flag" => 0];
//         }
// }

// פונקציה שמוחקת את כל המתודות
public function removePost($post_id) {

     try { 
        $sql = "DELETE FROM posts WHERE post_id = ? ";
        $this->connect();
        $stmt = $this->connection->prepare($sql);
        $res = $stmt->execute([$post_id]);
    

        return true;

    }
        catch(Exception $e) {
            return false;
        }
}
}
?>


