<?php
    class Student extends Person
    {  

 /*       function __construct($fnam=null, $lnam=null, $yob=null)
        {
          $this->firstname=$fnam;
          $this->lastname=$lnam;
          $this->YearofBirth=$yob;
        }
*/
        //variables
        public $courses=array();

        //functions

        public function getCourses()
        {
            return $this->courses;
        }
        public function setCourses($param)
        {
            array_push($this->courses,$param);
        }
        
        public function getCredpoints(){
            return $this->credits;
        }
        public function setCreditpoints($param){
            $this->credits = $param;
        }
        public function printData()
    {
        print_r($this->getFname() . " "
             .  $this->getLname() . "<br>"
             . $this->getAge() . " ("
             .  $this->getYearofBirth() . ")<br>");
           print_r($this->getCourses());
        print_r("<br>" .  $this->credits . "<br><br>");
    }

       // private function 



    }

?>