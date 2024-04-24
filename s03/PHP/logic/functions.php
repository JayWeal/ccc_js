<?php

/**
 * returns an array with Person Objects which are filtered by their firstname starting with the letter "E"
 * @param array<Person> $personList
 * @return array<Person>
 */

function getFilteredEPersons($personList){
    $ePersons = array();
    foreach($personList as $key => $person){
      if(str_starts_with($person->$name,"E")){
        $ePersons[] = new Person($person->$name, $person->$lastName, $person->$age);
      }  
    }
    return $ePersons;
}