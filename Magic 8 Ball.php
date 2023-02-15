<?php
//Magic 8 Ball

// Define a function which prompts the user to enter a yes or not question and then prints a random answer.
function magic8Ball(){
  echo "\nEnter a yes/no question: \n";
  $question = readline();
  echo "You have asked: $question\n";

  // Get a random number between 0 and 19 (inclusive).
  $selection = rand(0,19);
  
  // Use a switch statement to print the corresponding answer.
  switch($selection){
    case 0:
      echo "It is certain.";
      break;
    case 1:
      echo "It is decidedly so.";
      break;
    case 2:
      echo "Without a doubt.";
      break;
    case 3:
      echo "Yes - definitely.";
      break;
    case 4:
      echo "You may rely on it.";
      break;
    case 5:
      echo "As I see it, yes.";
      break;
    case 6:
      echo "Most likely.";
      break;
    case 7:
      echo "Outlook good.";
      break;
    case 8:
      echo "Yes.";
      break;
    case 9:
      echo "Signs point to yes.";
      break;
    case 10:
      echo "Reply hazy, try again.";
    case 11:
      echo "Ask again, later.";
      break;
    case 12:
      echo "Better not tell you now.";
      break;
    case 13:
      echo "Cannot predict now.";
      break;
    case 14:
      echo "Concentrate and ask again.";
      break;
    case 15:
      echo "Don't count on it.";
      break;
    case 16:
      echo "My reply is no.";
      break;
    case 17:
      echo "My sources say no.";
      break;
    case 18:
      echo "Outlook not so good.";
      break;
    default:
      echo "Very doubtful.";
  }
}

// Call the function a few times. 
magic8Ball();
magic8Ball();
magic8Ball();

echo "\n";