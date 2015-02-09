<?php

class person {
    private  $firstName;
    private  $middleName; //field;
    private  $lastName;


    public  function  setFirstName($firstName)

        {
            $this->firstName = $firstName;
        }

    public function setMiddleName($middleName)
        {
            $this->middleName=$middleName;
        }
    public function setLastName($lastName)

        {
            $this->lastName=$lastName;
        }

    public function getFullName()   //method(parameter)
        {
            return $this->firstName. " " . $this->middleName. " " . $this->lastName ;
        }
    public function getReverseFullName()
        {
            $fullName= $this->getFullName();
            return strrev($fullName);
        }

} 