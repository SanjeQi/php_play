<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>

<?php 

$names = array("Fred", "Rob","Ian");

if ($_POST["submit"]) {
  if ($_POST["name"]) {
    foreach ($names as $name) {
		if ($_POST["name"] == $name) {
			echo "I know you! Your name is".$name;
			$knowYou = 1;
		} 
	}
	if (!$knowYou) echo "I don't know you";

  } else {
    echo "Please enter your name";
  }

}
?>

    <form>
      <label for="name">Name</label>
      <input name="name" type="text" />
      <input type="submit" name="submit" value="Submit your name" />
      <form>
  </body>
</html>
