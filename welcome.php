<?php
	// get age from textfield, camel case always
  $age = $_POST['age'];

  // if the user inputs their age as 118 (oldest person on Earth)
  if ($age == 118) {
    echo "Hello, Lucile Randon!";
  } 

	// else if user input is 17 or higher
  else if ($age >= 17) {
    echo "You can watch R rated films.";
  } 

  // else if the user input is 13 or higher
  else if ($age >= 13) {
    echo "You can watch PG13 films.";
  } 

  //else if the user input is 10 or higher 
  else if ($age >= 10) {
    echo "You can watch G rated films.";
  }
    
  // else, if any other value
  else {
    echo "You cannot go to the theaters alone.";
  }
?>


