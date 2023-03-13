<!DOCTYPE html>
<html>
<head>
	<title>User Information Form</title>
</head>
<body>
	<!-- Task 1: HTML Basics

Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form. -->

<h1>User Information Form</h1>
	<form>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<input type="submit" value="Submit">
	</form>

  <!-- Task 2: Basic OOP in PHP

Create a PHP class called "Person" with the following properties and methods:

 

Properties:

 

Name

Email

Methods:

 

setName($name): sets the name property

setEmail($email): sets the email property

getName(): returns the name property

getEmail(): returns the email property

Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods to display the properties on the webpage.
 -->

 <?php

class Person {
    private $name;
    private $email;

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}


$person = new Person();


$person->setName("John Doe");
$person->setEmail("john.doe@example.com");


echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br>";
?>

// Task 3: Superglobal Variables in PHP Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage.


	<?php
		
		include('Person.php');

		
		$person = new Person();

		
		$name = $_POST['name'];
		$email = $_POST['email'];

		
		$person->setName($name);
		$person->setEmail($email);

		
		echo "Name: " . $person->getName() . "<br>";
		echo "Email: " . $person->getEmail() . "<br>";
	?>



?>

</body>
</html>
