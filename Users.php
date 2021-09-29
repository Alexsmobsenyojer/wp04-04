<?php
require_once 'Computer.php';
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

$user1 = new User("Deez","Androvic","pudding@deeznuts.com","6.9.2000","fluid");
$user1->setName('Alex');
echo "<br />";
echo "<br />";
echo $user1->getName();
echo "<br />";


$user2 = new User("Deez","Brendon","Brandon@gmail.com","3.10.1985","fluid");
$user2->setName('Brandon');
echo "<br />";
echo $user2->getName();
echo "<br />";


$user3 = new User("Deez","Sheen","pudding@mail.com","1.4.1996","fluid");
$user3->setName('Charlie');
echo "<br />";
echo $user3->getName();
echo "<br />";

$computers = array( $pc1, $pc2);  
$users = array($user1,$user2,$user3);
$users[0]->assignComputer($computers[0]);
$users[1]->assignComputer($computers[1]);
$users[2]->assignComputer($computers[1]);

$users[2]->getComputer()->connectMouse("Myška");




?>