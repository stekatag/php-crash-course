<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // Properties

  // Access modifiers
  // public: can be accessed from outside the class
  // protected: can be accessed only within the class itself and by inherited and parent classes
  // private: can only be accessed within the class that defines the property
  public $name;
  public $email;
  public $password;

  // A constructor is a method that runs when an object is created
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methods - functions that belong to a class
  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

// Instantiate a User object
$user1 = new User('John Doe', 'johndoe@gmail.com', '123456');
$user2 = new User('Stefan Gogov', 'email@gmail.com', '123456');

echo $user1->name . '<br>';
echo $user2->name . '<br>';

// Inheritance

class Employee extends User {
  public $position;

  public function __construct($name, $email, $password, $position) {
    parent::__construct($name, $email, $password);
    $this->position = $position;
  }

  public function get_position() {
    return $this->position;
  }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '2314214', 'Manager');
echo $employee1->get_position() . '<br>';
