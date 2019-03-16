<?php
abstract class Person
{
    public $Fname;
    public $Lname;
    public $YoB;

    function __construct($fnam=null, $lnam=null, $yob=null)
    {
      $this->firstname=$fnam;
      $this->lastname=$lnam;
      $this->YearofBirth=$yob;
    }

    // Force Extending class to define this method
    public function getFname(){
        return $this->firstname;
      }
      public function setFname($Fname){
          $this->firstname = $Fname;
      }
      public function getLname(){
          return $this->lastname;
      }
      public function setLname($param){
          $this->lastname = $param;
      }
      public function getYearofBirth(){
          return $this->YearofBirth;
      }
      public function setYearofBirth($YoB){
          $this->YearofBirth = $YoB;
      }
      public function getAge(){
          return 2019 - $this->YearofBirth;
      }
}


?>