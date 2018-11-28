<?php
include  'Person.php';

$birthdate = new \DateTime('1997-02-18');
$person = new Person('Joey', 'Schmitz', $birthdate);

echo 'Hallo'  . $person->getFullname() .  "\n\n";
echo 'Je bent geboren op een ' . $person->getDayOfBirth() . "\n";

