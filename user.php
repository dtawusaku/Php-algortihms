<?php

class User{
    private $name;
    private $age;
    private $gender;
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

}


$user1 = new User();
$user1->setName("Bob");
$user1->setAge(20);
$user1->setGender("Male");

echo $user1->getName() . "\n";
echo $user1->getAge(). "\n";
echo $user1->getGender() . "\n";

$user2 = new User();
$user2->setName("Alex");
$user2->setAge(18);
$user2->setGender("Female");


echo "\n" .$user2->getName() . "\n";
echo $user2->getAge(). "\n";
echo $user2->getGender() . "\n";