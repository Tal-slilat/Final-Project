<?php

    Class websiteManager extends User
    {
        // תכונות
        protected $ID;
        protected $cityName;
        protected $sreetName;
        protected $numHuose;
        protected $cellNumber;
        
        // פעולות
        function getID(){
            return $this->ID;
        }

        function setID($id){
            $this->ID = $id;
        }

        function getCityName(){
            return $this->CityName;
        }
        
        function setCityName($cityName){
            $this->cityName = $cityName;
        }

        function getStreetName(){
            return $this->sreetName;
        }
        
        function setStreetName($streetName){
            $this->sreetName = $sreetName;
        }

        function getNumHouse(){
            return $this->NumHouse;
        }
        
        function setNumHouse($numHouse){
            $this->numHouse = $numHouse;
        }

        function getCellNumber(){
            return $this->CellNumber;
        }
        
        function setCellNumber($CellNumber){
            $this->cellNumber = $CellNumber;
        }

        // function setProfileConfirmation(){
            
        // }
    }
?>