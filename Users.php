<?php

class User extends Computer
{
    private string $name;
    private string $surname;
    private string $email;
    private string $birth;
    private string $gender;
      

    public function __construct(string $name,string $surname, string $email, string $birth, string $gender)
    { 
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->birth = $birth;
        $this->gender = $gender;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    
    }
    public function getName()
    {
        return  $this->name;
    
    }
    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    
    }
    public function getSurname()
    {
        return  $this->surname;
    
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    
    }
    public function getEmail()
    {
        return  $this->email;
    
    }
    public function setBirth(string $birth)
    {
        $this->birth = $birth;
    
    }
    public function getBirth()
    {
        return  $this->birth;
    
    }
    public function setGender(string $gender)
    {
        $this->gender = $gender;
    
    }
    public function getGender()
    {
        return  $this->gender;
    
    }

public function assignComputer(Computer $computers)
    {
        $this->computers = $computers;
    }
    
public function getComputer()
    {return $this->computers;}

}





?>