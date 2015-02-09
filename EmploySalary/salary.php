<?php

class Salary {
    private  $fullName;
    private  $salary; //field;
    private  $houseRent;
    private  $medicalAllowance;


    public  function  setFullName($fullName)

    {
        $this->fullName = $fullName;
    }

    public function setSalary($salary)
    {
        $this->salary=$salary;
    }
    public function setHouseRent($houseRent)

    {
        $this->houseRent=$houseRent;
    }
    public function setMedicalAllowance($medicalAllowance)

    {
        $this->medicalAllowance=$medicalAllowance;
    }

    public function getFullName()   //method(parameter)
    {
        return $this->fullName ;
    }
    public function getSalary()
    {
        return $this->salary;

    }
    public function getHouseRent()
    {
        return $this->salary*($this->houseRent/100);

    }
    public function getMedicalAllowance()
    {
        return $this->salary*($this->medicalAllowance/100);

    }
    public function getTotalAmount()
    {
        return $this->salary + $this->getMedicalAllowance() + $this->getHouseRent();

    }

} 