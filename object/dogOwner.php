<?php
    include_once "User.php";

    Class dogOwner extends User // מחלקה לכל המשתמשים שהם בעלי כלבים
    {
        protected $dogKind;
        protected $dogName;
        protected $date;
        protected $img_url;

        public function getDogKind(){
            return $this->dogKind;
        }

        public function setDogKind($Dog_Kind){
            $this->dogKind = $Dog_Kind;
        }

        public function getDogName(){
            return $this->dogName;
        }

        public function setDogName($dogName){
            $this->dogName = $dogName;
        }

        public function getDate(){
            return $this->date;
        }

    }

?>

