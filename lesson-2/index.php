<?php
    ini_set('display_errors','On');
    require "user.php";

    $user1 = new User();
    $user1->setEmail("bill@gmail.com");
    $user1->setPassword("123654fg");

// save by ref: both objects changes
   $user2 = $user1;
   $user1->setEmail("sam@gmail.com");
   $user2->setEmail("tom@gmail.com");

// create copy of obj: both objects are completely separfted
   $user3 = clone $user1;
   $user1->setEmail("bill@gmail.com");
   $user3->setEmail("din@gmail.com");

    var_dump($user2);
    echo "<br />";
    var_dump($user2);
    echo "<br />";
    var_dump($user3);
?>