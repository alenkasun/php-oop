<?php
    class User {
        public $email;
        public $password;
        const MINCHARS = 8;

        public function login(){
            return "Logging in ...";
        }

        public function logout(){
            return "Logging out ...";
        }

        public function setPassword($str){
            if (strlen($str) < self::MINCHARS) {
                die("Error: not invalid password");
               //throw new Exception('The password shuold be at least ' . self::MINCHARS . ' characters long.');
            }
            $this->password = hash('sha256', $str);
        }
    }
?>