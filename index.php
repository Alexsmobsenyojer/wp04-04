<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <title>Users PC</title>
</head>
<body>
<?php
require_once 'Computer.php';
require_once 'Users.php';

//Computers
$pc1 = new Computer("ATX");
    try
     {
        $pc1->addMotherBoard('MSI super socket 949');
        $pc1->mountDrive('Samsung 516 GB');
        $pc1->addCPU('Intel i5 10800U');
        $pc1->addRAM('Corsair 16 GB dual channel pack');
        $pc1->connectKeyboard('Logitech keyboard');
        $pc1->connectMouse('Logitech mouse');
        $pc1->addGPU ('RTX 3080');
        $pc1->connectDisplay('Samsung');
        $pc1->addPowerSupply  ('800W');
        
        echo "Computer1 connected all peripherials successfully!";
        echo "<br />";
        } 
    catch (\Throwable $th) {
        echo "Computer issues:" . $th->getMessage();
                          }
$pc2 = new Computer("miniATX");
    try
     {
        $pc2->addMotherBoard('IDK ');
        $pc2->mountDrive('248 GB');
        $pc2->addCPU('Intel i9');
        $pc2->addRAM(' 32 GB dual channel pack');
        $pc2->connectKeyboard('Razer keyboard');
        $pc2->connectMouse('Razer mouse');
        $pc2->addGPU ('RX 580');
        $pc2->connectDisplay('Acer');
        $pc2->addPowerSupply  ('600W');
        
        echo "Computer2 connected all peripherials successfully!";
        } 
    catch (\Throwable $th) {
        echo "Computer issues:" . $th->getMessage();
                          }

$user1 = new User("Deez","Androvic","pudding@deeznuts.com","6.9.2000","fluid");
$user1->setName('Alex');
echo "<br />";
echo "<br />";
echo $user1->getName();
echo "<br />";

//Users
$user2 = new User("Brandon", "","Brandon@gmail.com","3.10.1985","fluid");
$user2->setSurname('Big');
echo "<br />";
echo $user2->getSurname();
echo "<br />";


$user3 = new User("Deez","Sheen","pudding@mail.com","1.4.1996","");
$user3->setGender('Femboy');
echo "<br />";
echo $user3->getEmail();
echo "<br />";
echo "<br />";

//Assign
$computers = array( $pc1, $pc2);  
$users = array($user1,$user2,$user3);
$users[0]->assignComputer($computers[0]);
$users[1]->assignComputer($computers[1]);
$users[2]->assignComputer($computers[1]);
try
{$users[2]->getComputer()->connectMouse("Myš domácí");
 echo "Mouse connected to pc2: ".$users[2]->getComputer()->getMouse();}
catch (\Throwable $th) {
    echo "Mouse error:" . $th->getMessage();}
    echo "<br />";
    echo "<br />";

foreach ($users as $user) {
    echo "<br />";
    echo "<br />";
   echo $user->getSurname(). "s setup: <br />";
   echo "-Case: ".$user->getComputer()->getCase(). "<br />";
   echo "-Motherboard: ".$user->getComputer()->getMB()."<br />";
   echo "-Solid state disk: ".$user->getComputer()->getSSD(). "<br />";
   echo "-Procesor: ".$user->getComputer()->getCPU(). "<br />";
   echo "-Operating memory: ".$user->getComputer()->getRAM(). "<br />";
   echo "-Keyboard: ".$user->getComputer()->getKeyboard(). "<br />";
   echo "-Mouse: ".$user->getComputer()->getMouse(). "<br />";
   echo "-Graphics card: ".$user->getComputer()->getGPU(). "<br />";
   echo "-Display: ".$user->getComputer()->getDisplay(). "<br />";
   echo "-Power Supply: ".$user->getComputer()->getPowersupply(). "<br />";
   
}
?>
</body>
</html>