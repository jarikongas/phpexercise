<?php
    class Staff extends Person
    {
        public $vacancy;
        public function getVacancy(){
            return $this->vacancy;
        }
        public function setVacancy($vac){
            $this->vacancy = $vac;
        }
        public function printData()
        {
           print_r($this->getFname() . " "
             .  $this->getLname() . "<br>"
             . $this->getAge() . " ("
             .  $this->getYearofBirth() . ")<br>");
             print_r($this->getVacancy());
    
        }
    
    }


?>