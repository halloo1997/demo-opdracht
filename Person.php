<?php

class Person{

    private $firstname;
    private $lastname;
    private $birthdate;

    public function __construct($firstname, $lastname, \DateTime $birthdate)
    {

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthdate= $birthdate;
    }

    public function getFullname()
    {
        return $this->firstname . ' ' . $this->lastname;

}

    /**
     * @return DateTime
     */
    public function getDayOfBirth()
    {
        return $this->birthdate->format('l');
    }
}