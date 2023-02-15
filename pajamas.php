<?php
//Pajamas (classes and objects)

// Define a helper class with a static function which takes in a string and formats the string so that 
// all character are lower case except from the second character.
class StringUtils {

public static function secondCase($string){

  if (strlen($string) === 0){
    return "";
  } elseif (strlen($string)===1){
    return strtolower($string);
  } else {
    $string = strtolower($string);
    $string[1] = strtoupper($string[1]);
    return $string;
  }

}
}

// Define the class Pajamas with the properties owner, fit and colour. 
class Pajamas{

  private $owner, $fit, $colour;

  function __construct($owner = "unknown", $fit = "normal", $colour = "blue") {

    $this->owner = StringUtils::secondCase($owner);
    $this->fit = $fit;
    $this->colour = $colour;
 }

// Define a method to print a description of the pajamas.
  public function describe(){
    return "\nThe pajamas are owned by $this->owner the fit is $this->fit and they are $this->colour.\n";
  }

// Define a method to alter the fit of the pajamas.
  public function setFit($newFit){
    $this->fit = $newFit;
  }

}


// Create an instance of the Pajamas class and print the results of the describe method.
$chicken_pjs = new Pajamas("Bob", "baggy", "blue");
echo $chicken_pjs->describe();

// Use setFit to change the fit of the pajamas and re-print the results of the describe method. 
$chicken_pjs->setFit("short");
echo $chicken_pjs->describe();
