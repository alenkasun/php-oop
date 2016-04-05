<?php
    class User {
        private $email;
        private $password;
        const MINCHARS = 8;

        public function login(){
            return "Logging in ...";
        }

        public function logout(){
            return "Logging out ...";
        }

        private function validatePassword($str){
            return (strlen($str) >= self::MINCHARS)? true : false;
        }

        public function setPassword($str){
            if ($this->validatePassword($str) == false) {
               throw new Exception('The password shuold be at least ' . self::MINCHARS . ' characters long.');
            }
            $this->password = hash('sha256', $str);
        }

        public function getPassword(){
            return $this->password;
        }

        public function setEmail($str){
            if (! filter_var($str, FILTER_VALIDATE_EMAIL)) {
               throw new Exception('Please, provide a valid email.');
            }
            $this->email = $str;
        }

        public function getEmail(){
            return $this->email;
        }


    }
?>