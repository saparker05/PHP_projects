<?php
//Mad Lib Functions 

// The function below inserts the noun, verd, colour and unit passes to the function into the story. 
function generateStory($plural_noun, $verb, $colour, $distance_unit)
{ // Story taken from Robert Frost's "Stopping by Woods on a Snowy Evening"
  $story = "\nThe $plural_noun are lovely, $colour, and deep.\n 
  But I have promises to keep,\n 
  And $distance_unit to go before I $verb,\n
  And $distance_unit to go before I $verb.\n";

  return $story;
}

// Print the results of calling the function with different arguments. 
echo generateStory("trees", "run", "pink", "metres");
echo generateStory("flowers", "dance", "red", "yards");
echo generateStory("plants", "slide", "blue", "inches");
