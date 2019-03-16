<?php
/*
     

Teachers has properties (member variables):

    firstName
    lastName
    yearOfBirth
    teachingSubjects (array)
    department

*/
class Teacher extends Person{
    public $subjects=array();


    public function getSubjects(){
        return $this->subjects;
    }

    public function setSubjects($param)
    {
         array_push($this->subjects,$param);
    }


    public function getDepartment(){
        return $this->dept;
    }
    public function setDepartment($department){
        $this->dept = $department;
    }
    public function printData()
    {
       print_r($this->getFname() . " "
         .  $this->getLname() . "<br>"
         . $this->getAge() . " ("
         .  $this->getYearofBirth() . ")<br>");
         print_r($this->getDepartment());
         print_r($this->getSubjects());

    }

}

?>