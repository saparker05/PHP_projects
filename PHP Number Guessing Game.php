<?php
// PHP Number Guessing

// Declare variables to count the number of plays, correct guesses, high guesses and low guesses. 
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "In this game you will try to guess randomly generated numbers between 1 and 10 (inclusive).\n";


// Define the function guessNumber which asks the user for their guess and compares it to a randomly generated number from 1 to 10.
function guessNumber(){
  
  global $play_count, $correct_guesses, $guess_high, $guess_low;

  $play_count += 1;

  $number = rand(1,10);

  echo "\nGuess a number between 1 and 10 (inclusive):\n";
  $guess = intval(readline(">> "));

  echo "\n Round: $play_count Guess: $guess. Answer: $number.\n";

  if ($guess === $number){
    $correct_guesses += 1;
  } elseif ($guess > $number){
    $guess_high += 1;
  } else{
    $guess_low += 1;
  }
}

// Call the game function 10 times.
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

// Calculate the percent of correct guesses and print.
$correct_percent = $correct_guesses/$play_count * 100;
echo "\nYou guessed the correct number $correct_percent% of the time.\n";

// Print further game details if applicable. 
if ($guess_high > $guess_low){
  echo "When you guessed wrong, you tended to guess high.";
}

if ($guess_high < $guess_low){
  echo "When you guessed wrong, you tended to guess low.";
}