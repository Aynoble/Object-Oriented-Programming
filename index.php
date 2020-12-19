<?php

    class User {
        public $username;
        private $email;
        public $role = 'Member';

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend(){
            return "$this->username added a new friend";
        }

        public function message() {
            return '$this->email sent you a new message'; 
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            if(strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }
    }

    class AdminUser extends User{
        public $level;
        public $role = 'Admin';

        public function __construct($username, $email, $level){
            $this->level = $level;
            parent::__construct($username, $email);
        }

        public function message() {
            return '$this->email sent you a new Admin message'; 
        }
    }

    $userOne = new User('Ayo', 'Aynoble18@gmail.com');
    $userTwo = new User('victor', 'victordiya90@gmail.com');
    $userThree = new AdminUser('James', 'James@gmail.com', 5);
?>

<Doctype html>
<html>
    <head>
        <title>Object Oriented Programming</title>
    </head>
    <body>
        <h1>Hello World</h1>
    </body>
</html>

Notes: 
1. when inheriting a class through another class and you're creating another Access Modifier Variable, for instance "$level" as seen above,
   you must call the other construct function that has been set in the parent class so that you won't get an error.

2. You can directly overwrite access modifiers in inherited classes, take "$role" for example;

3. You can directly overwrite methods in inherited classes if the Access Modifier of the Variable called in it is 'Public' or 'Protected'; 
   if it is 'Private', it won't work at all; 'Protected' is very similar to 'Private', the only difference is 'Private' won't work when trying
   to access it in inherited classes but 'Protected' will.